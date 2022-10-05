<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\BlockController;

Route::group(["prefix"=>"v1"],function(){

    Route::group(["middleware"=>"auth:api"],function(){

    });
    Route::post("/signup", [LandingController::class, "signup"])->name("signup");
    Route::post("/login", [LandingController::class, "login"])->name("login");
    Route::get("/showmales", [HomeController::class, "showMales"])->name("showmales");
    Route::get("/showfemales", [HomeController::class, "showFemales"])->name("showfemales");
    Route::get("/showall", [HomeController::class, "showAll"])->name("showall");
    Route::post("/addfavorite", [FavouritesController::class, "addFavorite"])->name("addfavorite");
    Route::get("/getfavorite", [FavouritesController::class, "getFavorite"])->name("getfavorite");
    Route::post("/addblock", [BlockController::class, "addBlock"])->name("addblock");
});