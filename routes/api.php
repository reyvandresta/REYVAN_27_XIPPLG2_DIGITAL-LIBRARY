<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

// Menggunakan apiResource untuk resource CRUD standar
Route::apiResource('users', userController::class);
Route::apiResource('categories', CategoryController::class);
// Route contoh untuk mengambil user yang sudah autentikasi menggunakan Sanctum