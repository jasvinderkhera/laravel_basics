<?php

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