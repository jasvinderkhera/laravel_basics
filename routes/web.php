<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/about', function(){
    
    return view('about',);
});

Route::view("/contact",'contact');

Route::get('/user',[UserController::class,'getUser']);
Route::get('/getuser',[UserController::class,'getNewUser']);
Route::get('/aboutuser/{name}',[UserController::class,'aboutUser']);
Route::get('/admin',[UserController::class,'adminLogin']);
Route::get('/contact', [UserController::class,'contact']);
Route::get('/user-about/{name}', [UserController::class,'userAbout']);
