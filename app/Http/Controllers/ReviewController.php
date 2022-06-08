<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Rating;

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
                "reviews" => $revs
            ], 200);
        }

        // Get All Ratings
        public function getAllRatings($id = null){
            if($id != null){
                $ratings = Rating::find($id);
            }else{
                $ratings = Rating::all();
            }
            
            return response()->json([
                "status" => "Success",
                "ratings" => $ratings
            ], 200);
        }

        //Get restaurant reviews
        public function getRestoreview($id){

            $reviews = Review::where("resto_id", $id)->get();
            
            return response()->json([
                "status" => "Success",
                "reviews" => $reviews
            ], 200);
        }

        public function addReview(Request $request){

            $rev = new Review;
    
            $rev->status = 1;
            $rev->rev_text = $request->rev_text;
            $rev->user_id = $request->user_id;
            $rev->resto_id = $request->resto_id;
    
            $rev->save();
            
            return response()->json([
                "status" => "Success"
            ], 200);
        }
}

