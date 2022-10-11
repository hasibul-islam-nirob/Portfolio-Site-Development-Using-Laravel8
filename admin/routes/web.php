<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'homeIndex'])->middleware('loginCheck');

Route::get('/visitor', [VisitorController::class, 'visitorIndex'])->middleware('loginCheck');

Route::get('/setting', [SettingController::class,'settingIndex'])->middleware('loginCheck');
Route::post('/toBannerDataUpdate', [SettingController::class, 'toBannerDataUpdate'])->middleware('loginCheck');
Route::post('/toBannerDataInsert', [SettingController::class, 'toBannerDataInsert'])->middleware('loginCheck');
Route::post('/footerDataInsert', [SettingController::class, 'footerDataInsert'])->middleware('loginCheck');
Route::post('/footerDataUpdate', [SettingController::class, 'footerDataUpdate'])->middleware('loginCheck');

Route::get('/service',[ServicesController::class, 'servicesIndex'])->middleware('loginCheck');
Route::get('/getServicesData',[ServicesController::class, 'getServicesData'])->middleware('loginCheck');
Route::post('/serviceDelete',[ServicesController::class, 'serviceDelete'])->middleware('loginCheck');
Route::post('/serviceSelectByID',[ServicesController::class, 'serviceSelectByID'])->middleware('loginCheck');
Route::post('/serviceUpdate',[ServicesController::class, 'serviceUpdate'])->middleware('loginCheck');
Route::post('/addNewServices',[ServicesController::class, 'addNewService'])->middleware('loginCheck');

Route::get('/courses', [CoursesController::class, 'CoursesIndex'])->middleware('loginCheck');
Route::get('/getCoursesData', [CoursesController::class, 'getAllCourses'])->middleware('loginCheck');
Route::post('/courseDelete', [CoursesController::class, 'courseDelete'])->middleware('loginCheck');
Route::post('/courseSelectByID', [CoursesController::class, 'courseSelectByID'])->middleware('loginCheck');
Route::post('/courseUpdate', [CoursesController::class, 'courseUpdate'])->middleware('loginCheck');
Route::post('/addNewCourse', [CoursesController::class, 'addNewCourse'])->middleware('loginCheck');

Route::get('/projects',[ProjectsController::class, 'projectsIndex'])->middleware('loginCheck');
Route::get('/getProjects',[ProjectsController::class, 'getAllProjects'])->middleware('loginCheck');
Route::post('/projectDelete',[ProjectsController::class, 'projectDelete'])->middleware('loginCheck');
Route::post('/projectSelectByID',[ProjectsController::class, 'projectSelectByID'])->middleware('loginCheck');
Route::post('/projectUpdate',[ProjectsController::class, 'projectUpdate'])->middleware('loginCheck');
Route::post('/addProject',[ProjectsController::class, 'addNewProject'])->middleware('loginCheck');

Route::get('/reviews',[ReviewsController::class, 'reviewsIndex'])->middleware('loginCheck');
Route::get('/getReviewsData',[ReviewsController::class, 'getReviewsData'])->middleware('loginCheck');
Route::post('/reviewDelete',[ReviewsController::class, 'reviewDelete'])->middleware('loginCheck');
Route::post('/reviewsSelectByID',[ReviewsController::class, 'reviewsSelectByID'])->middleware('loginCheck');
Route::post('/reviewUpdate',[ReviewsController::class, 'reviewUpdate'])->middleware('loginCheck');
Route::post('/addNewReview',[ReviewsController::class, 'addNewReviews'])->middleware('loginCheck');

Route::get('/massage',[MassageController::class, 'messageIndex'])->middleware('loginCheck');
Route::get('/getMassage',[MassageController::class, 'getMassageData'])->middleware('loginCheck');
Route::get('/seenBox',[MassageController::class, 'seenBoxIndex'])->middleware('loginCheck');
Route::post('/messageSelectByID',[MassageController::class, 'getMessageByID'])->middleware('loginCheck');
Route::post('/messageSeen',[MassageController::class, 'messageSeened'])->middleware('loginCheck');
Route::get('/getUnseenMassage',[MassageController::class, 'getSeenedMassageData'])->middleware('loginCheck');
Route::post('/messageUnSeen',[MassageController::class, 'messageUnSeened'])->middleware('loginCheck');
Route::post('/deleteMessage',[MassageController::class, 'messageDelete'])->middleware('loginCheck');


Route::get('/login',[LoginController::class, 'LoginIndex']);
Route::post('/onlogin',[LoginController::class, 'onLogin']);
Route::get('/logout',[LoginController::class, 'onLogOut']);
