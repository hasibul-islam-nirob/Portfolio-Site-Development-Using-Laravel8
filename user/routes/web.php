<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'homeIndex']);
Route::post('/sendMassage',[HomeController::class, 'sendContact']);

Route::get('/courses',[CoursesController::class, 'courseIndex']);

Route::get('/projects',[ProjectController::class, 'projectIndex']);

Route::get('/contact',[ContactController::class, 'contactIndex']);
