<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\About;
use Mail;
use Session;
use App\Plans;
use App\Review;
use DB;

/**
* Class for PageController
*/
class PagesController extends Controller
{
	
	public function getIndex(){
		return view('pages.welcome');
	}	

	public function getAbout(){
		
		$data = \DB::table('about')->get();
		return view('pages.aboutus')->with('data',$data);
	}

	

	public function getEvaluationMethod(){
		$data = \DB::table('evalutionmethod')->get();
		return view('pages.evaluationmethod')->with('data', $data);
	}

	public function getProfile(){
		return view('pages.profile');
	}

	public function getRanking(){
		$totalWebsites = Plans::where('IsReviewed', '1')->orderBy('avgScore', 'DESC')->limit(10)->get();
		//dd($totalWebsites);
		return view('pages.ranking')->with('totalWebsites', $totalWebsites);
	}

	public function getTbpReview(){
		return view('pages.tbpreview');
	}

	public function getTextForm(){
		return view('pages.textform');
	}

	public function getVideoForm(){
		return view('pages.videoform');
	}

	public function LoginOrRegister(){
		return view('pages.LoginOrRegister');
	}

	public function CheckFreeReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('pages.CheckFreeReview')->with('Reviews', $Reviews)->with('websites', $websites);
   	}

   	public function CheckTextReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('pages.CheckTextReview')->with('Reviews', $Reviews)->with('websites', $websites);
   	}

   	public function CheckVideoReview($id)
    {   
        $Reviews = Review::where('plan_id', $id)->get();
        $websites = Plans::where('id', $id)->get();
        return view('pages.CheckVideoReview')->with('Reviews', $Reviews)->with('websites', $websites);
   }
}