<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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
