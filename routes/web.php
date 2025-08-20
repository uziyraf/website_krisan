<?php

use Illuminate\Support\Facades\Route;

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
