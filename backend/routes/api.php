<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::group(["prefix"=>"v1"],function(){

    Route::group(["middleware"=>"auth:api"],function(){

    });
    Route::post("/signup", [LandingController::class, "signup"])->name("signup");
    Route::post("/login", [LandingController::class, "login"])->name("login");
    Route::get("/showmales", [HomeController::class, "showMales"])->name("showmales");
});