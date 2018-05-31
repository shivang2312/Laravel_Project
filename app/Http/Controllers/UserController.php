<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Plans;

use Auth;

use App\Review;

use App\User;

class UserController extends Controller
{
    public function index()
    {   
        $totalWebsites = Plans::where('user_id', Auth::id())->count();
        $reviewedWebsites = Plans::where('user_id', Auth::id())
        ->where('IsReviewed', '1')
        ->count();

       $notReviewedWebsites = Plans::where('user_id', Auth::id())
        ->where('IsReviewed', '0')
        ->count();

        $freePlan = Plans::where('plan', '0')
        ->where('user_id', Auth::id())
        ->count();

        $textPlan = Plans::where('plan', '1')
        ->where('user_id', Auth::id())
        ->count();

        $videoPlan = Plans::where('plan', '2')
        ->where('user_id', Auth::id())
        ->count();
       
    	return view('user.UserDashboard')->with('totalWebsites', $totalWebsites)->with('reviewedWebsites', $reviewedWebsites)->with('notReviewedWebsites', $notReviewedWebsites)->with('freePlan', $freePlan)->with('textPlan', $textPlan)->with('videoPlan', $videoPlan);
    }

    public function getWebsiteList(){
        $reviewedWebsites = Plans::where('IsReviewed', '1')
        ->where('user_id', '=', Auth::id())
        ->paginate(5);
        return view('user.getWebsiteList')->with('reviewedWebsites', $reviewedWebsites);
    }
    

    public function CheckFreeReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('user.CheckFreeReview')->with('Reviews', $Reviews)->with('websites', $websites);
   }

   public function CheckTextReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('user.CheckTextReview')->with('Reviews', $Reviews)->with('websites', $websites);
   }

   public function CheckVideoReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('user.CheckVideoReview')->with('Reviews', $Reviews)->with('websites', $websites);
   }

   public function getFreePlanWebsites(){
        $freeplanwebsites = Plans::where('plan', '0')
        ->where('user_id', Auth::id())
        ->paginate(5);
        return view('User.FreePlanWebsites', compact('freeplanwebsites'));
    }
    public function getTextPlanWebsites(){
        $textplanwebsites = Plans::where('plan', '1')
        ->where('user_id', Auth::id())
        ->paginate(5);
        return view('User.TextPlanWebsites', compact('textplanwebsites'));
    }
    public function getVideoPlanWebsites(){
        $videoplanwebsites = Plans::where('plan', '2')
        ->where('user_id', Auth::id())
        ->paginate(5);
        return view('User.VideoPlanWebsites', compact('videoplanwebsites'));
    }

    public function noRights(){
        return view('User.NoRights');
    }

}
