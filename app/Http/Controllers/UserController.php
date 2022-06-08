<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    //Get users
    public function getAllUsers($user_id = null){
        if($user_id != null){
            $users = User::find($user_id);
        }else{
            $users = User::all();
        }
        
        return response()->json([
            "status" => "Success",
            "users" => $users
        ], 200);
    }

    
    //Sign Up API
    public function signUp(Request $request){

        // $user = [];
        // $user["first_name"] = $request->first_name;
        // $user["last_name"] = $request->last_name;
        // $user["gender"] = $request->gender;
        // $user["email"] = $request->email;
        // $user["passowrd"] = $request->passowrd;
        // $user["phone_number"] = $request->phone_number;
        // $user["city_id"] = $request->city_id;
        // $user["is_admin"] = 0;

        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->city_id = $request->city_id;
        $user->image = null;
        $user->is_admin = 0;

        $user->save();

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }


    // Login API
    // public function login(Request $request){

    //     $user["emil"] = $request->emil;
    //     $user["password"] = $request->password;

    //     $users = User::find($user_id);
    //     return response()->json([
    //         "status" => "Success",
    //         "user_id" => $user_id
    //     ], 200);
    // }

}
