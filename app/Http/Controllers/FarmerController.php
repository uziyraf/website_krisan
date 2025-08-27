<?php

namespace App\Http\Controllers;

use App\Models\Petani as Farmer;
use App\Models\Bunga;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Menampilkan form untuk membuat petani baru.
     */
    public function create()
    {
        $flowers = Bunga::all();

        return view('create', ['flowers' => $flowers]);
    }

    /**
     * Menyimpan data petani baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
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
        
        // Sekarang $newFarmer sudah ada dan bisa digunakan
        if ($request->has('flowers')) {
            $newFarmer->bunga()->attach($request->flowers);
        }

        return redirect()->route('farmers.create')->with('success', 'Petani baru berhasil ditambahkan!');
    }
}  