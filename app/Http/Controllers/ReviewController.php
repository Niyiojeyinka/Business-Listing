<?php

namespace App\Http\Controllers;
use App\Review;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($id)
    {
        //
        return view("reviews.create_review");


    }

    public function store(Request $request,$id)
    {
        $review = new Review();
        $review->comment =$request->comment;
        $review->rating=$request->rating;
        $review->user_id = Auth::user()->id;
        $review->save();

        return back()->with("success","Review Submitted successfully");

    }
}
