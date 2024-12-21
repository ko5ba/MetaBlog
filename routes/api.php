<?php

use App\Http\Controllers\Site\Post\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization\RegisterController;
use App\Http\Controllers\Authorization\LoginController;
use App\Http\Controllers\Authorization\LogoutController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('posts', PostController::class);

Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class)
    ->middleware('auth:sanctum');
