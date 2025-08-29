<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\FlowerController; 
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

// Route untuk Autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- GRUP ROUTE ADMIN YANG DIPROTEKSI ---
Route::middleware(['auth.basic.sederhana'])->prefix('admin')->group(function () {

    // --- Rute untuk Manajemen Petani (Farmers) ---
    Route::get('/farmers', [FarmerController::class, 'index'])->name('farmers.index');
    Route::get('/farmers/create', [FarmerController::class, 'create'])->name('farmers.create');
    Route::post('/farmers', [FarmerController::class, 'store'])->name('farmers.store');
    Route::get('/farmers/{farmer}/edit', [FarmerController::class, 'edit'])->name('farmers.edit');
    Route::put('/farmers/{farmer}', [FarmerController::class, 'update'])->name('farmers.update');
    Route::delete('/farmers/{farmer}', [FarmerController::class, 'destroy'])->name('farmers.destroy');

    // --- Rute untuk Manajemen Bunga (Flowers) ---
    Route::get('/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');
    Route::post('/flowers', [FlowerController::class, 'store'])->name('flowers.store');

});