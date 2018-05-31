<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Review;

use App\Plans;

use DB;

class StoreFreeReview extends Controller
{
    public function storeFreeReview(Request $request)
    {
    	$this->validate($request, [
        		'responsiveness_score' => 'required | integer | between:1,10',
        		'responsiveness_review' => 'required',
        		'layout_score' => 'required | integer | between:1,10',
        		'lauout_review' => 'required',
        		'color_scheme' => 'required',
        		'color_scheme_score' => 'required | integer | between:1,10',
        		'color_scheme_review' => 'required'
        	]);

    	$review = new Review();

        $review->responsiveness_score = $request->get('responsiveness_score');
        $review->responsiveness_review = $request->get('responsiveness_review');
        $review->layout_score = $request->get('layout_score');
        $review->lauout_review = $request->get('lauout_review');
        $review->color_scheme = $request->get('color_scheme');
        $review->color_scheme_score = $request->get('color_scheme_score');
        $review->color_scheme_review = $request->get('color_scheme_review');
        $review->plan_id = $request->get('plan_id');

        $avgScore = ($review->responsiveness_score + $review->layout_score + $review->color_scheme_score)/3;
     //   dd($avgScore);

        DB::table('plans')
            ->where('id', $review->plan_id)
            ->update(['avgScore' => $avgScore]);

        $review->save();

        $reviewed = DB::table('plans')
            ->where('id', $review->plan_id)
            ->update(['IsReviewed' => '1']);

        return back()->with('success', 'Thanks for Review!');
    }
}
