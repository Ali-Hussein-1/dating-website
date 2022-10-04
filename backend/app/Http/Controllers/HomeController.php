<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    function showMales(){
        $males = User::
                    where('gender','male')
                    ->get();
        return response()->json([
            "status" => "Success",
            "data" => $males
        ]);

    }
}
