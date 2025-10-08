<?php

namespace App\Http\Controllers;

use App\Models\Bunga as Flower; // Gunakan alias Bunga sebagai Flower
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Menampilkan daftar semua bunga.
     */
    public function index() // <-- TAMBAHKAN METHOD INI
    {
        $flowers = Flower::all(); // Mengambil semua data dari model Bunga (Flower)
        return view('admin.indexflower', ['flowers' => $flowers]);
    }
    /**
     * Menampilkan form untuk membuat bunga baru.
     */
    public function create()
    {
        return view('admin.createflower');
    }

    /**
     * Menyimpan data bunga baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:flowers',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        // 2. Handle upload gambar
        $imagePath = $request->file('image')->store('images/flowers', 'public');

        // 3. Simpan data ke database
        Flower::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('flowers.create')->with('success', 'Bunga baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit data bunga.
     */
    public function edit(Flower $flower)
    {
        // Kirim data bunga yang spesifik ke view 'edit'
        return view('admin.createflower', ['flower' => $flower]);
    }

    /**
     * Mengupdate data bunga di database.
     */
    public function update(Request $request, Flower $flower)
    {
        // 1. Validasi data (mirip dengan 'store' tapi 'unique' perlu penyesuaian)
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:flowers,name,' . $flower->id,
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // nullable karena gambar mungkin tidak diubah
        ]);

        // 2. Handle jika ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama (opsional tapi disarankan)
            // Storage::disk('public')->delete($flower->image);
            
            $validated['image'] = $request->file('image')->store('images/flowers', 'public');
        }

        // 3. Update data di database
        $flower->update($validated);

        // 4. Redirect ke halaman daftar dengan pesan sukses
        return redirect()->route('flowers.index')->with('success', 'Data bunga berhasil diperbarui!');
    }

     public function destroy(Flower $flower) // <-- TAMBAHKAN METHOD INI
    {
        // Menghapus relasi di tabel jembatan (pivot table)
        // Ini akan menghapus semua koneksi bunga ini dengan petani manapun
        $flower->petani()->detach();

        // Opsional tapi sangat disarankan: Hapus file gambar dari storage
        // use Illuminate\Support\Facades\Storage; // tambahkan ini di atas
        // Storage::disk('public')->delete($flower->image);

        // Hapus data bunga dari tabel 'flowers'
        $flower->delete();

        return redirect()->route('flowers.index')->with('success', 'Data bunga berhasil dihapus!');
    }
}