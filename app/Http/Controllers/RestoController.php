<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller{

    // Get All Restaurants
    public function getAllRestos($id = null){
        if($id != null){
            $restos = Restaurant::find($id);
        }else{
            $restos = Restaurant::all();
        }
        
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    }

    // Get a Restaurant
    public function getResto($id){

        $resto = Restaurant::where("resto_id", $id)->get();
        
        return response()->json([
            "status" => "Success",
            "resto" => $resto
        ], 200);
    }

    //Add a resaturant
    public function addResto(Request $request){

        $resto = new Restaurant;

        $resto->resto_name = $request->resto_name;
        $resto->phone_number = $request->phone_number;
        $resto->description = $request->description;
        $resto->cat_id = $request->cat_id;
        $resto->city_id = $request->city_id;

        $resto->save();
        
        return response()->json([
            "status" => "Success"
        ], 200);
    }

}
