<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patientbookapp',[App\Http\Controllers\HomeController::class, 'p_index'])->name('patientbookapp');
Route::get('/patientmakebooking/{doctorCategory_exDoctorID}',[App\Http\Controllers\HomeController::class, 'p_make_index'])->name('patientmakebooking');
Route::get('/doctorsdetails',[App\Http\Controllers\HomeController::class, 'doc_detail_index'])->name('doctorsdetails');
Route::post('/addconfirmedbooking',[App\Http\Controllers\BookingHistoryController::class, 'Bkstore'])->name('addconfirmedbooking');
Route::put('/Alter_avai/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'Alter_avai']);

//Route::get('/model',[])

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() { //calls laravel built in Auth with middleware to let only admin to access dashboard , isAdmin checks user roles

    //admin dashboard page
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    //booking time slot page
    Route::get('bktimeslotcategory',[App\Http\Controllers\Admin\DoctorController::class, 'index2']);

    Route::get('edit-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'edit']);

    Route::put('update-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'update']);

    Route::post('delete-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'destroy']);

    //doctor page
    Route::get('doctorcategory',[App\Http\Controllers\Admin\DoctorController::class, 'index']);

    Route::get('add-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'create']);
    
    Route::post('add-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'store']);

    Route::get('edit-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'editBk']);

    Route::put('update-doctor/{doctorCategory_exDoctorID}',[App\Http\Controllers\Admin\DoctorController::class,'updateBk']);

    Route::post('delete-doctor',[App\Http\Controllers\Admin\DoctorController::class, 'destroy']);

    //user page 
    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']); 

    Route::get('edit-user/{userCategory_id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);

    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);

    Route::post('delete-user',[App\Http\Controllers\Admin\UserController::class, 'destroy']);

});