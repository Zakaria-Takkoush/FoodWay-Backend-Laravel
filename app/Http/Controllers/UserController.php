<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

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
    
    public function signUp(Request $request){
        // die($request);
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

}
