<?php

namespace App\Http\Controllers;

use App\Models\Petani as Farmer;
use App\Models\Bunga;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Menampilkan daftar semua petani.
     */
    public function index()
    {
        $farmers = Farmer::with('bunga')->get();
        return view('admin.index', ['farmers' => $farmers]);
    }

    /**
     * Menampilkan form untuk membuat petani baru.
     */
    public function create()
    {
        $flowers = Bunga::all();
        return view('admin.create', ['flowers' => $flowers]);
    }

    /**
     * Menyimpan data petani baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mapLink' => 'nullable|url',
            'specialization' => 'required|string',
            'description' => 'required|string',
            'story' => 'required|string',
            'whatsapp' => 'required|string|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'flowers' => 'nullable|array',
            'flowers.*' => 'exists:flowers,id'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        
        $newFarmer = Farmer::create([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'specialization' => $validated['specialization'],
            'description' => $validated['description'],
            'story' => $validated['story'],
            'whatsapp' => $validated['whatsapp'],
            'image' => $imagePath,
        ]);
        
        if ($request->has('flowers')) {
            $newFarmer->bunga()->attach($request->flowers);
        }

        return redirect()->route('farmers.index')->with('success', 'Petani baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit petani.
     */
    public function edit(Farmer $farmer)
    {
        $flowers = Bunga::all();
        return view('admin.edit', [
            'farmer' => $farmer,
            'flowers' => $flowers
        ]);
    }

    /**
     * Mengupdate data petani di database.
     */
    public function update(Request $request, Farmer $farmer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mapLink' => 'nullable|url',
            'specialization' => 'required|string',
            'description' => 'required|string',
            'story' => 'required|string',
            'whatsapp' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'flowers' => 'nullable|array',
            'flowers.*' => 'exists:flowers,id'
        ]);

        if ($request->hasFile('image')) {
            // Optional: Hapus gambar lama
            // Storage::disk('public')->delete($farmer->image); 
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $farmer->update($validated);
        $farmer->bunga()->sync($request->flowers ?? []); // sync() lebih aman untuk update

        return redirect()->route('farmers.index')->with('success', 'Data petani berhasil diperbarui!');
    }

    /**
     * Menghapus data petani dari database.
     */
    public function destroy(Farmer $farmer)
    {
        // Optional: Hapus file gambar dari storage
        // Storage::disk('public')->delete($farmer->image);

        $farmer->delete();

        return redirect()->route('farmers.index')->with('success', 'Data petani berhasil dihapus!');
    }
}