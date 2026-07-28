<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Status check route.
 * Get /api/status
 */
Route::get('/status', function () {
    return response()->json(['status' => 'ok']);
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
});