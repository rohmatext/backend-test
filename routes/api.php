<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::apiResource('users', UserController::class)->middleware('auth:sanctum');

Route::get('/{header}/search', [App\Http\Controllers\Api\RealtimeController::class, 'search'])->where('header', '(nama|nim|ymd)');
