<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockchainController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layouts.dashboard');
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

Route::get('/blockchain/{slug}', [BlockchainController::class, 'show'])
    ->middleware('auth')->name('blockchain.detail');

Route::get('/crypto/{slug}', [CryptoController::class, 'show'])
    ->middleware('auth')->name('crypto.detail');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
