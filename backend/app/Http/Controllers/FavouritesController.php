<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    function addFavorite(Request $request){
        $favorite = Favorite::create([
            'id_1'=>$request->id_1,
            'id_2'=>$request->id_2,
        ]) ;

        $favorite->save();

        return response()->json([
            "status" => "Success",
            "message" => $favorite
        ]);
    }
}
