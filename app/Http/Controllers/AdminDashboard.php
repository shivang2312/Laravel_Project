<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Plans;
use DB;

class AdminDashboard extends Controller
{
     public function getIndex()
    {
    	$users = DB::table('users')->count();

    	$totalWebsites = DB::table('plans')->count();
    	$reviewedWebsites = Plans::where('IsReviewed', '1')->count();
    	$notReviewedWebsites = Plans::where('IsReviewed', '0')->count();

    	$freePlan = Plans::where('plan', '0')->count();
    	$textPlan = Plans::where('plan', '1')->count();
    	$videoPlan = Plans::where('plan', '2')->count();


    	return view('Admin.dashboard')->with('users',$users)->with('totalWebsites', $totalWebsites)->with('reviewedWebsites', $reviewedWebsites)->with('notReviewedWebsites', $notReviewedWebsites)->with('freePlan', $freePlan)->with('textPlan', $textPlan)->with('videoPlan', $videoPlan);
    }
}
