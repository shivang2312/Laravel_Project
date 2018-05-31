<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Review;
use App\Plans;
use Carbon\Carbon;

class AdminReviewController extends Controller
{
    public function getAdminReviewResponsiveness()
    {
        $plans = Plans::where('IsReviewed', '0')->get();
    	return view('Admin.AdminReviewResponsiveness', compact('plans'));
    }

    public function StartTextReview($id) {
      $plans = DB::select('select * from plans where id = ?',[$id]);
      return view('Admin.StartTextReview')->with('plans', $plans)->with('myid', Plans::find($id));
   }

   public function StartFreeReview($id){
    $plans = DB::select('select * from plans where id = ?',[$id]);
   // dd(Plans::find($id));
   // dd($plans);
    return view('Admin.StartFreeReview')->with('plans', $plans)->with('myid', Plans::find($id));
   }

   public function StartVideoReview($id)
   {
    $plans = DB::select('select * from plans where id = ?',[$id]);
    //dd(Plans::find($id));
    return view('Admin.StartVideoReview')->with('plans', $plans)->with('myid', Plans::find($id));
   }

   public function websiteOfTheDay(){
    $current = Carbon::now();
  //  dd($current->toDateString());
    
    $totalSites = Review::whereBetween('created_at', ['2017-04-01', '2018-04-01'])->get()->toArray();
   // dd();

    for ($i=0; $i < sizeof($totalSites); $i++) { 
      $siteOfTheYear = Plans::where('id', '$totalSites[$i]->plan_id')->get();
      dd($siteOfTheYear); 
    }

   // $siteOfTheYear = Plans::where('id', '$totalSites->plan_id')->get();
    //dd($siteOfTheYear);
    return view('pages.welcome');
   }


}
