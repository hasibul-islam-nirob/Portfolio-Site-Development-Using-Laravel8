<?php

use App\Http\Controllers\topBannerController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Home');
});

Route::get('/ff',[topBannerController::class, 'topBannerIndex']);
