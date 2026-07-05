<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

    Route::prefix('admin')->name('admin.')->group(function () {
        // Admin dashboard home
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Admin users management page
        Route::get('/users', function () {
            return view('admin.users');
        })->name('users');

        // Admin teacher management page
        Route::get('/teachers', function () {
            return view('admin.teachers');
        })->name('teachers');

        // Admin student management page
        Route::get('/students', function () {
            return view('admin.students');
        })->name('students');

        // Admin subject management page
        Route::get('/subjects', function () {
            return view('admin.subjects');
        })->name('subjects');

        // Admin course management page
        Route::get('/courses', function () {
            return view('admin.courses');
        })->name('courses');

        // Admin profile page
        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('profile');
    });

    // Resource routes for student CRUD operations
    Route::resource('students', StudentController::class);

    // Resource routes for teacher CRUD operations
    Route::resource('teachers', TeacherController::class);
});
