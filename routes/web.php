<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;

Route::resource('stations', StationController::class);


Route::get('/', function () {
    return view('welcome');
});
