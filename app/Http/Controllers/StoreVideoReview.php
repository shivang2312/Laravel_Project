<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Review;
use Storage;
use DB;
use Input;
use App\Plans;

class StoreVideoReview extends Controller
{
    public function storeVideoReview(Request $request)
    {
    	$this->validate($request, [
        		'responsiveness_score' => 'required| integer | between:1,10',
                'responsiveness_review' => 'required',
                'layout_score' => 'required| integer | between:1,10',
                'lauout_review' => 'required',
                'color_scheme' => 'required',
                'color_scheme_score' => 'required| integer | between:1,10',
                'color_scheme_review' => 'required',
                'pagespeed_score' => 'required| integer | between:1,100',
                'pagespeed_review' => 'required',
                'usability_score' => 'required| integer | between:1,10',
                'usability_review' => 'required',
                'content_score' => 'required| integer | between:1,10',
                'content_review' => 'required',
                'creativity_score' => 'required| integer | between:1,10',
                'creativity_review' => 'required',
                'product_image' => 'required | mimes:mp4,3gpp, avi'
         	]);
      //dd($request);
        

    	$review = new Review();
        $plan = new Plans();

        $review->responsiveness_score = $request->get('responsiveness_score');
        $review->responsiveness_review = $request->get('responsiveness_review');
        $review->layout_score = $request->get('layout_score');
        $review->lauout_review = $request->get('lauout_review');
        $review->color_scheme = $request->get('color_scheme');
        $review->color_scheme_score = $request->get('color_scheme_score');
        $review->color_scheme_review = $request->get('color_scheme_review');
        $review->pagespeed_score = $request->get('pagespeed_score');
        $review->pagespeed_review = $request->get('pagespeed_review');
        $review->usability_score = $request->get('usability_score');
        $review->usability_review = $request->get('usability_review');
        $review->content_score = $request->get('content_score');
        $review->content_review = $request->get('content_review');
        $review->creativity_score = $request->get('creativity_score');
        $review->creativity_review = $request->get('creativity_review');
        $review->plan_id = $request->get('plan_id');

        if($review->pagespeed_score >0 && $review->pagespeed_score <=10)
            $pagespeed_score1 = 1;
        elseif($review->pagespeed_score >10 && $review->pagespeed_score <=20)
            $pagespeed_score1 = 2;  
        elseif($review->pagespeed_score >20 && $review->pagespeed_score <=30)
            $pagespeed_score1 = 3;             
        elseif($review->pagespeed_score >30 && $review->pagespeed_score <=40)
            $pagespeed_score1 = 4;
        elseif($review->pagespeed_score >40 && $review->pagespeed_score <=50)
            $pagespeed_score1 = 5;
        elseif($review->pagespeed_score >50 && $review->pagespeed_score <=60)
            $pagespeed_score1 = 6;
        elseif($review->pagespeed_score >60 && $review->pagespeed_score <=70)
            $pagespeed_score1 = 7;
        elseif($review->pagespeed_score >70 && $review->pagespeed_score <=80)
            $pagespeed_score1 = 8;
        elseif($review->pagespeed_score >80 && $review->pagespeed_score <=90)
            $pagespeed_score1 = 9;
        elseif($review->pagespeed_score >90 && $review->pagespeed_score <=100)
            $pagespeed_score1 = 10;              

        $avgScore = ($review->responsiveness_score + $review->layout_score + $review->color_scheme_score + $pagespeed_score1 + $review->usability_score + $review->content_score + $review->creativity_score)/7;
     

        DB::table('plans')
            ->where('id', $review->plan_id)
            ->update(['avgScore' => $avgScore]);

        if($file = $request->hasFile('product_image')) 
        {
            
            $file = $request->file('product_image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
        } 
    //dd($review);
        
        DB::table('plans')
            ->where('id', $review->plan_id)
            ->update(['product_image' => $fileName]);
       

        $review->save();

        $reviewed = DB::table('plans')
            ->where('id', $review->plan_id)
            ->update(['IsReviewed' => '1']);

        return back()->with('success', 'Thanks for Review!');
    }
}
