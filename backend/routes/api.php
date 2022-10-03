<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::group(["prefix"=>"v1"],function(){
    
    Route::group(["middleware"=>"auth:api"],function(){

        Route::post("/login", [LandingController::class, "login"])->name("login");

        Route::post("/signup", [LandingController::class, "signup"])->name("signup");

    })


})

 


