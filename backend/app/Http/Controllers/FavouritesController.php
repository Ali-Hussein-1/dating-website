<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favourite;
use App\Models\User;

class FavouritesController extends Controller
{   
    // Function to add user to the favorite list
    function addFavorite(Request $request){
        DB::table('favourites')->insert(
            ['id_1' => $request->id_1 ,
             'id_2' => $request->id_2]
        ); 


        return response()->json([
            "status" => "Success",
        ]);
    }

    // Function to display user to the favorite list
    function getFavorite(){
       return DB::table('users')
                    ->join('favourites','id',"=",'id_2')
                    ->select('users.*')
                    ->get();
    }
}


