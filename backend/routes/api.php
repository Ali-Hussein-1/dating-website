<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\BlockController;
// Grouping the Routes 
Route::group(["prefix"=>"v1"],function(){
// Middleware for authorization (I faced problems when implementing and had no time to fix)
    Route::group(["middleware"=>"auth:api"],function(){

    });
    // Route for signup
    Route::post("/signup", [LandingController::class, "signup"])->name("signup");
    // Route for login
    Route::post("/login", [LandingController::class, "login"])->name("login");
    // Route to show all males
    Route::get("/showmales", [HomeController::class, "showMales"])->name("showmales");
    // Route to show all females
    Route::get("/showfemales", [HomeController::class, "showFemales"])->name("showfemales");
    // Route to show all users
    Route::get("/showall", [HomeController::class, "showAll"])->name("showall");
    // Route to add a user to the favourite list
    Route::post("/addfavorite", [FavouritesController::class, "addFavorite"])->name("addfavorite");
    // Route to show all user's favourites
    Route::get("/getfavorite", [FavouritesController::class, "getFavorite"])->name("getfavorite");
    // Route to block a user
    Route::post("/addblock", [BlockController::class, "addBlock"])->name("addblock");
    // Route to show blocked users
    Route::get("/getblock", [BlockController::class, "getBlock"])->name("getblock");
});