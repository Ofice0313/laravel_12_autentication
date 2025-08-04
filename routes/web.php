<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);

Route::get('/forgot', [AuthController::class, 'forgot']);
