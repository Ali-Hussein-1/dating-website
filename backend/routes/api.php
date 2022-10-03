<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::post("/login", [LandingController::class, "login"])->name("login");

Route::post("/signup", [LandingController::class, "signup"])->name("signup"); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
