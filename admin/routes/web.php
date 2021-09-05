<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;



Route::get('/', function () {
    return view('Home');
});


Route::get('/visitor', [VisitorController::class, 'visitorIndex']);


Route::get('/setting', [SettingController::class,'settingIndex']);
Route::post('/insertDataTopBanner', [SettingController::class, 'insertDataTopBanner']);


Route::get('/service',[ServicesController::class, 'servicesIndex']);
Route::get('/getServicesData',[ServicesController::class, 'getServicesData']);
Route::post('/serviceDelete',[ServicesController::class, 'serviceDelete']);
Route::post('/serviceSelectByID',[ServicesController::class, 'serviceSelectByID']);
Route::post('/serviceUpdate',[ServicesController::class, 'serviceUpdate']);
Route::post('/addNewServices',[ServicesController::class, 'addNewService']);


Route::get('/courses', [CoursesController::class, 'CoursesIndex']);
Route::get('/getCoursesData', [CoursesController::class, 'getAllCourses']);
Route::post('/courseDelete', [CoursesController::class, 'courseDelete']);
Route::post('/courseSelectByID', [CoursesController::class, 'courseSelectByID']);
Route::post('/courseUpdate', [CoursesController::class, 'courseUpdate']);
Route::post('/addNewCourse', [CoursesController::class, 'addNewCourse']);


Route::get('/projects',[ProjectsController::class, 'projectsIndex']);
Route::get('/getProjects',[ProjectsController::class, 'getAllProjects']);
Route::post('/projectDelete',[ProjectsController::class, 'projectDelete']);
Route::post('/projectSelectByID',[ProjectsController::class, 'projectSelectByID']);
Route::post('/projectUpdate',[ProjectsController::class, 'projectUpdate']);
Route::post('/addProject',[ProjectsController::class, 'addNewProject']);


