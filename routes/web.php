<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth
Route::post('/register', [AuthController::class, 'register'])->name('user_register');
