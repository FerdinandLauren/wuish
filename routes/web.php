<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;
use App\Http\Controllers\AuthController;

Route::resource('stations', StationController::class);



Route::get('/', function () {
    return view('welcome');
});

// Route untuk login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route untuk registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk dashboard yang dilindungi oleh middleware auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');