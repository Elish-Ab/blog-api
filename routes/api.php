<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// Public Routes (No Authentication Required)
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected Routes (Sanctum Authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('posts', [PostController::class, 'index']); // Get all posts
    Route::get('posts/{post}', [PostController::class, 'show']); // Get a single post
    Route::post('posts', [PostController::class, 'store']); // Create a new post
    Route::put('posts/{post}', [PostController::class, 'update']); // Update an existing post
    Route::delete('posts/{post}', [PostController::class, 'destroy']); // Delete a post
    Route::post('logout', [AuthController::class, 'logout']); // Logout
});
