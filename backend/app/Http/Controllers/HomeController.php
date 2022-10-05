<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    // Function to show all male users
    function showMales(){
        $males = User::
                    where('gender','male')
                    ->get();
        return response()->json([
            "status" => "Success",
            "data" => $males
        ]);

    }
    
    // Function to show all female users
    function showFemales(){
        $females = User::
                    where('gender','female')
                    ->get();
        return response()->json([
            "status" => "Success",
            "data" => $females
        ]);

    }

    // Function to show all users
    function showAll(){
        $all = User::all();
        return response()->json([
            "status" => "Success",
            "data" => $all
        ]);

    }
}
