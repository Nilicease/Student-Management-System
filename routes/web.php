<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Public landing page
Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

// Show login form for guests
Route::get('/login', function () {
    return view('guest.login', ['mode' => 'login']);
})->name('login');
// Process login form submission
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Log out authenticated users
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Show registration form for guests
Route::get('/register', function () {
    return view('guest.login', ['mode' => 'register']);
})->name('register');
// Process registration form submission
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::middleware('auth')->group(function () {
    // Show a pending approval page for newly registered users
    Route::get('/pending', function () {
        return view('guest.user');
    })->name('user.pending');

    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('teachers', TeacherController::class);
        Route::resource('users', UserController::class);
        Route::resource('students', StudentController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('subjects', SubjectController::class);

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('profile');
    });

    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('subjects', SubjectController::class);
});
