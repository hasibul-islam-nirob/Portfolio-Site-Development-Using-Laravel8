<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\topBannerController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'homeIndex']);
Route::get('/ff',[topBannerController::class, 'topBannerIndex']);
