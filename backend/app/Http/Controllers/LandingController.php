<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        // $user = User::all();
            $user = User::
                    where("email", $email)
                    ->where("password",$password)
                    ->get();

        return response()->json([
            "status" => "Success",
            "message" => $user
        ]);
    }

    function signup(Request $request){
        $user = User::create([
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
