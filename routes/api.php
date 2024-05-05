<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group([
    "middleware" => ["auth:sanctum"]
], function(){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('/staff', StaffController::class);
    Route::resource('/user', UserController::class);
});
