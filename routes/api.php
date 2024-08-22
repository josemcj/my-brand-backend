<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

/**
 * Public routes
 */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/contact', [ContactController::class, 'store']);


Route::group(['middleware' => 'auth:api'], function () {
    /**
     * Auth
     */
    Route::get('/user', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);


    Route::apiResource('/contact', ContactController::class)->only(['index', 'show', 'update', 'destroy']);
});
