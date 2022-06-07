<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    //Get users
    public function getAllUsers($id = null){
        if($id != null){
            return response()->json([
                "status" => "Success",
                "user" => $id
            ], 200);
        }

        return response()->json([
            "status" => "Success",
            "users" => [1,2,3]
        ], 200);
    }
    
    //Sign Up API
    public function signUp(Request $request){
        $user = [];
        $user["first_name"] = $request->first_name;
        $user["last_name"] = $request->last_name;
        $user["gender"] = $request->gender;
        $user["email"] = $request->email;
        $user["passowrd"] = $request->passowrd;
        $user["phone_number"] = $request->phone_number;
        $user["city_id"] = $request->city_id;
        $user["is_admin"] = 0;

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }


    // Login API
    // public function login(Request $request){

    //     $user["emil"] = $request->emil;
    //     $user["password"] = $request->password;


    //     return response()->json([
    //         "status" => "Success",
    //         "user_id" => $user_id
    //     ], 200);
    // }

}
