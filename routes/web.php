<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\FlowerController; 
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/flower-list', [PageController::class, 'flowerList'])->name('flower.list');

Route::get('/farmer-list', [PageController::class, 'farmerList'])->name('farmer.list'); 


Route::get('/farmers/{farmer}', [PageController::class, 'farmerDetail'])->name('farmer.detail');

Route::get('/about', function () {
    return view('about');
});


// --- Rute untuk Manajemen Petani (Farmers) ---
// Menampilkan daftar semua petani
Route::get('/admin/farmers', [FarmerController::class, 'index'])->name('farmers.index');
// Menampilkan form untuk menambah petani baru
Route::get('/admin/farmers/create', [FarmerController::class, 'create'])->name('farmers.create');
// Menyimpan data petani baru
Route::post('/admin/farmers', [FarmerController::class, 'store'])->name('farmers.store');
// Menampilkan form untuk mengedit data petani
Route::get('/admin/farmers/{farmer}/edit', [FarmerController::class, 'edit'])->name('farmers.edit');
// Mengupdate data petani yang sudah ada
Route::put('/admin/farmers/{farmer}', [FarmerController::class, 'update'])->name('farmers.update');
// Menghapus data petani
Route::delete('/admin/farmers/{farmer}', [FarmerController::class, 'destroy'])->name('farmers.destroy');


// --- Rute untuk Manajemen Bunga (Flowers) ---
// Menampilkan form untuk menambah bunga baru
Route::get('/admin/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');
// Menyimpan data bunga baru
Route::post('/admin/flowers', [FlowerController::class, 'store'])->name('flowers.store');