<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;
use App\Http\Controllers\AdminController;

Route::resource('stations', StationController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Rute yang hanya bisa diakses oleh admin
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
