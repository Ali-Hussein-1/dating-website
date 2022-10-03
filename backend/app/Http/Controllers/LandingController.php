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

    function signup(Request $request){
        $user = new USER; 

        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $location = $request->location;
        $gender = $request->gender;
        $bio = $request->bio;

        $user->save();

        return response()->json([
            "status" => "Success",
            "message" => $user
        ]);
    }
}
