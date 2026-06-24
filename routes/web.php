<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth
// Route::post('/register', [AuthController::class, 'register'])->name('user_register');

//Students API
// Route::resource('students', StudentController::class);

//Teachers API
// Route::resource('teachers', TeacherController::class);
