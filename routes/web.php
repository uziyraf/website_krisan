<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\FlowerController; 

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/flower-list', function () {
    return view('flower-list');
});

Route::get('/farmer-list', function () {
    return view('farmer-list');
});

Route::get('/farmer-detail', function () {
    return view('farmer-detail');
});

Route::get('/about', function () {
    return view('about');
});


// Route untuk menampilkan form tambah petani
Route::get('/admin/farmers/create', [FarmerController::class, 'create'])->name('farmers.create');

// Route untuk memproses data dari form
Route::post('/admin/farmers', [FarmerController::class, 'store'])->name('farmers.store');


// Route untuk menampilkan form tambah bunga
Route::get('/admin/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');

// Route untuk memproses data dari form
Route::post('/admin/flowers', [FlowerController::class, 'store'])->name('flowers.store');