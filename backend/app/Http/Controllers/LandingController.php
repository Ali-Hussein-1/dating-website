<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    // unauthorized login
    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
            $user = User::
                    where("email", $email)
                    ->where("password",$password)
                    ->get();

        return response()->json([
            "status" => "Success",
            "message" => $user
        ]);
    }
    // unauthorized signup
    function signup(Request $request){
        $user = User::create([
            // Filling the user's info to the DB
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'location'=>$request->location,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'image'=>$request->image,
            'bio'=>$request->bio
        ]) ;

        $user->save();

        return response()->json([
            "status" => "Success",
            "message" => $user
        ]);
    }
}
