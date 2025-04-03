<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard');  // Pastikan ini sesuai dengan lokasi file
})->name('dashboard');

Route::get('/about', function () {
    return view('layouts.about');
})->name(name: 'about');

// Route untuk halaman Blockchain
Route::get('/blockchain', function () {
    return view('layouts.blockchain');
})->name('blockchain');

// Route untuk halaman Crypto
Route::get('/crypto', function () {
    return view('layouts.crypto');
})->name('crypto');
