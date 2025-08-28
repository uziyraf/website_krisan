<?php

namespace App\Http\Controllers;

use App\Models\Bunga; // Pastikan Model Bunga di-import
use App\Models\Petani;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman daftar bunga.
     */
    public function flowerList()
    {
        // Ambil semua data bunga dari database
        $flowers = Bunga::all();

        // Kirim data tersebut ke file view 'flower-list'
        return view('flower-list', ['flowers' => $flowers]);
    }

     /**
     * Menampilkan halaman daftar petani.
     */
    public function farmerList() // <-- Tambahkan method baru ini
    {
        // Ambil semua data petani. 'with('bunga')' sangat penting
        // untuk mengambil data bunga terkait secara efisien.
        $farmers = Petani::with('bunga')->get();

        // Kirim data tersebut ke file view 'farmer-list'
        return view('farmer-list', ['farmers' => $farmers]);
    }

    public function farmerDetail(Petani $farmer)
    {
    // Ini adalah "Route Model Binding". Laravel secara ajaib sudah
    // menemukan data petani dari database berdasarkan ID di URL.

    // Kita hanya perlu memastikan data bunganya juga ikut terambil.
    $farmer->load('bunga');

    // Kirim satu objek petani ini ke file view 'farmer-detail'
    return view('farmer-detail', ['farmer' => $farmer]);
    }

     /**
     * Menampilkan halaman beranda dengan data petani.
     */
    public function home() // <-- Tambahkan method baru ini
    {
        $farmers = Petani::all(); // Ambil semua data petani
        return view('home', ['farmers' => $farmers]);
    }
}