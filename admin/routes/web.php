<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VisitorController;



Route::get('/', function () {
    return view('Home');
});


Route::get('/visitor', [VisitorController::class, 'visitorIndex']);


Route::get('/setting', [SettingController::class,'settingPage']);
Route::get('/getTopBanner',[SettingController::class, 'getDataTopBanner']);