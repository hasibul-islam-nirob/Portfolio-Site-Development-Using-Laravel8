<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServicesController;



Route::get('/', function () {
    return view('Home');
});


Route::get('/visitor', [VisitorController::class, 'visitorIndex']);


Route::get('/setting', [SettingController::class,'settingIndex']);
Route::post('/insertDataTopBanner', [SettingController::class, 'insertDataTopBanner']);


Route::get('/service',[ServicesController::class, 'servicesIndex']);
Route::get('/getServicesData',[ServicesController::class, 'getServicesData']);
