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
    
}
