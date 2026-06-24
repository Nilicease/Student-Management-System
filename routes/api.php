<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Students API
Route::resource('students', StudentController::class);

//Teachers API
Route::resource('teachers', TeacherController::class);
