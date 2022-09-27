<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() { //calls laravel built in Auth with middleware to let only admin to access dashboard , isAdmin checks user roles

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']); //calling create function in category controller
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']); // store function 
    Route::get('edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']); //prefix is admin so no need /admin
    //Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'delete']);
    Route::post('delete-category',[App\Http\Controllers\Admin\CategoryController::class,'delete']);

    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']); // called index bcs it returns the view 
    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);
    

});