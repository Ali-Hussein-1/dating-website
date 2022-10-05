<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favourite;

class FavouritesController extends Controller
{
    function addFavorite(Request $request){
        DB::table('favourites')->insert(
            ['id_1' => $request->id_1 ,
             'id_2' => $request->id_2]
        ); 


        return response()->json([
            "status" => "Success",
        ]);
    }

    function getFavorite(Request $request){
       return DB::table('users')
                    ->join('favourites','id',"=",'id_2')
                    ->select('uesrs.*')
                    ->get();
    }
}


