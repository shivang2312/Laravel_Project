<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Plans;
use Auth;
use DB;

class UserDashboardController extends Controller
{
    public function getTotalWebsites(){
    	$totalWebsites = Plans::where('user_id', Auth::id())->paginate(5);
    	//dd(Auth::id());
    	return view('user.TotalSubmittedWebsites')->with('totalWebsites', $totalWebsites);
    }

    public function getReviewedWebsites(){
    	$reviewedWebsites = DB::table('plans')
            ->where('user_id', '=', Auth::id())
            ->where('IsReviewed','=','1')->paginate(5);
    	return view('user.GetReviewedWebsites')->with('reviewedWebsites', $reviewedWebsites);
    }

    public function getRamainingWebsites(){
    	$reviewedWebsites = DB::table('plans')
            ->where('user_id', '=', Auth::id())
            ->where('IsReviewed','=','0')->paginate(5);
    	return view('user.GetRemainingReviewedWebsites')->with('reviewedWebsites', $reviewedWebsites);
    }
}
