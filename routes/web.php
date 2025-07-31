<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/registration', [AuthController::class, 'registration']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/forgot', [AuthController::class, 'forgot']);
