<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/flower-list', function () {
    return view('flower-list');
});
