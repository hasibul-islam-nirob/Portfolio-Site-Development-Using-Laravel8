<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;



Route::get('/', function () {
    return view('Home');
});

Route::get('/setting', [SettingController::class,'settingPage']);