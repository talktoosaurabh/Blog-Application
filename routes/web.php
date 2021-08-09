<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\blogController;

Route::group(['middleware' => 'revalidate'],function(){

    Route::post('/signin',[signupController::class,'login']);

    Route::get('/logout',[signupController::class,'logout']);

    Route::post('/creatAccount',[signupController::class,'registration']);

    Route::get('/blog',[blogController::class,'index']);

    Route::post('/update',[blogController::class,'blogpost']);

    Route::post('/editPost',[blogController::class,'editPost']);

    Route::post('/deletePost',[blogController::class,'deletePost']);

    Route::post('/support',[blogController::class,'support']);

    Route::post('/post-view',[blogController::class,'singlePost']);

    Route::get('/singlePost/post-id={id}',[blogController::class,'singlePostView']);

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/create-post', function () {
        return view('CreatePost');
    });

    Route::get('/', function () {
        return view('welcome');
    });
});




