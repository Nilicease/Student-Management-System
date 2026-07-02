<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Route::get('/login', function () {
    return view('guest.login', ['mode' => 'login']);
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('guest.login', ['mode' => 'register']);
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/pending', function () {
    return view('guest.user');
})->name('user.pending');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/teachers', function () {
        return view('admin.teachers');
    })->name('teachers');

    Route::get('/students', function () {
        return view('admin.students');
    })->name('students');

    Route::get('/subjects', function () {
        return view('admin.subjects');
    })->name('subjects');

    Route::get('/courses', function () {
        return view('admin.courses');
    })->name('courses');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');

    Route::get('/logout', function () {
        return view('admin.logout');
    })->name('logout');
});

// Students API
Route::resource('students', StudentController::class);

// Teachers API
Route::resource('teachers', TeacherController::class);
