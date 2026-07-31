<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

/**
 * Status check route.
 * Get /api/status
 */
Route::get('/status', function () {
    return response()->json(['status' => 'ok']);
});

/**
 * Vote routes.
 * Post /api/vote/token -> check token validity
 */
Route::prefix('vote')->controller(VoteController::class)->group(function () {
    Route::get('/token', 'token');
    Route::post('/', 'vote');
});

/**
 * Authentication routes.
 * Post /api/auth/login -> login manual pake password
 * Post /api/auth/login-google -> login pake google
 * Post /api/auth/logout -> logout user
 */
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/login-google', 'loginGoogle');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', 'logout');
    });
});

Route::middleware('auth:sanctum')->group(function () {
    /**
     * User management routes
     * Get /api/user -> get list user
     * Post /api/user -> create user baru
     * Put /api/user/{id}/toggle-status -> toggle status user dengan id tertentu
     * Delete /api/user/{id} -> delete user dengan id tertentu
     */
    Route::put('/user/{id}/toggle-status', [UserController::class, 'toggleStatus']);
    Route::apiResource('user', UserController::class)
        ->except(['show', 'update']);

    /**
     * Profile routes
     * Get /api/profile/me -> get profile user yang sedang login
     */
    Route::prefix('profile')->controller(ProfileController::class)->group(function () {
        Route::get('/me', 'me');
    });
});
