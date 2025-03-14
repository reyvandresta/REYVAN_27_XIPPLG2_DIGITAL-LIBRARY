<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\bookController;

// Menggunakan apiResource untuk resource CRUD standar
Route::apiResource('users', userController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('books', bookController::class);
// Route contoh untuk mengambil user yang sudah autentikasi menggunakan Sanctum