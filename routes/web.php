<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;

Route::resource('stations', StationController::class);


use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);

