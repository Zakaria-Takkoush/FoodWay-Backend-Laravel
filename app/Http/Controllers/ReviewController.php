<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
        // Get All Reviews
        public function getAllReviews($id = null){
            if($id != null){
                $revs = Review::find($id);
            }else{
                $revs = Review::all();
            }
            
            return response()->json([
                "status" => "Success",
                "restos" => $revs
            ], 200);
        }
}
