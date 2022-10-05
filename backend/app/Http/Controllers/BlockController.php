<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Block;
use App\Models\User;

class BlockController extends Controller
{
    // Function to add a blocked user to the DB
    function addBlock(Request $request){
        DB::table('blocks')->insert(
            ['blocker_id' => $request->blocker_id ,
             'blocked_id' => $request->blocked_id]
        ); 


        return response()->json([
            "status" => "Success",
        ]);
    }
    // Function to get blocked users from the DB
    function getBlock(){
        return DB::table('users')
                     ->join('blocks','id',"=",'blocker_id')
                     ->select('users.*')
                     ->get();
     }


}
