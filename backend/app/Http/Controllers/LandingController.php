<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $user = User::
                    where("email", $email)
                    ->where("password",$password)
                    ->get();

        return response()->json([
            "status" => "Success",
            "message" => "Success"
        ]);
    }
}
