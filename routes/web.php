<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/about/{name}', function(){
    
    return view('about',);
});

Route::view("/contact",'contact')->middleware([AgeCheck::class,CountryCheck::class]);
Route::view("/user-form",'user-form');
Route::view('/help','help')->name('hp');
Route::view('/help/{name}','help')->name('user');


Route::post("adduser", [UserController::class,'addUser']);

Route::get('/user',[UserController::class,'getUser']);
Route::get('users', [UserController::class, 'users']);
Route::get('/getuser',[UserController::class,'getNewUser']);
Route::get('/aboutuser/{name}',[UserController::class,'aboutUser']);
Route::get('/admin',[UserController::class,'adminLogin']);
// Route::get('/contact', [UserController::class,'contact']);
Route::get('/user-about/{name}', [UserController::class,'userAbout']);

Route::get('show', [HomeController::class, 'show']);
Route::get('/getalluser', [UserController::class, 'getUsers']);
 
Route::get('/students',[StudentController::class,'getStudents']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'editStudent']);
Route::get('search',[StudentController::class,'search']);
Route::view('localwelcome','localwelcome');
Route::view('localhome','localhome');
Route::view('localcontactus','localcontactus');
Route::view('localabout','localabout');

// queries

Route::get('queries',[UserController::class,'getQueries']);


// HTTP Requests

Route::view('userform', 'form');

// Route to handle form submission
Route::post('userform', [UserController::class, 'httpReq']);




// Auth

Route::view('login','login');
Route::view('profile','profile');

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);


// Upload

Route::view('upload','upload');
Route::post('upload', [UploadController::class, 'upload']);


// Localization set Language




Route::middleware('SetLang')->group(function(){
    Route::view('localwelcome','localwelcome');
Route::view('localhome','localhome');
Route::view('localcontactus','localcontactus');
Route::view('localabout','localabout');

    Route::get('setlang/{lang}', function($lang){
        Session::put('lang',$lang);
        return redirect('/localwelcome');
    });
});


Route::view('add-students', 'add-students');
Route::post('add-students', [StudentController::class, 'addStudents']);


// Prefix Routes

// Route::prefix('student')->group(function(){
//     Route::view('/home', 'studenthome');
//     Route::get('/show', [HomeController::class,'showStudent']);
//     Route::get('/add', [HomeController::class,'addStudent']);
    
// });


// Controller Routes

Route::controller(HomeController::class)->group(function(){
    Route::get('show','showStudent');
    Route::get('add','addStudent');
    Route::get('about/{name}','about');
});