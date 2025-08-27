<?php

namespace App\Http\Controllers;

use App\Models\Bunga as Flower; // Gunakan alias Bunga sebagai Flower
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Menampilkan form untuk membuat bunga baru.
     */
    public function create()
    {
        return view('createflower');
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
}