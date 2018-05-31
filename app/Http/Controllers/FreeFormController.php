<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Plans;
use App\User;
use Auth;
use DB;
use Input;

class FreeFormController extends Controller
{
    public function getFreeForm(){
    	return view('pages.freeform');
    }

    public function postFreeForm(Request $request){
    	$this->validate($request, [
        		'websitename' => 'required',
        		'websiteurl' => 'required | url',
        		'ownername' => 'required ',
        		'category' => 'required',
        		'country' => 'required',
        		'description' => 'required'
        	]);

    	$plan = new Plans();
        $plan->websitename = $request->get('websitename');
        $plan->websiteurl = $request->get('websiteurl');
        $plan->ownername = $request->get('ownername');
        $plan->designername = $request->get('designername');
        $plan->category = $request->get('category');
        $plan->country = $request->get('country');
        $plan->description = $request->get('description');
        $plan->plan = $request->get('plan');
        $plan->user_id = Auth::id();

       // dd($IsSubmitted);

        if($request->get('other') != "")
            $plan->category = $request->get('other');
        else
        {            
            if(Input::get('category') == 0)
                $plan->category = 'Entertainment';
            else if(Input::get('category') == 1)
                $plan->category = 'Sports';
            else if(Input::get('category') == 2)
                $plan->category = 'Ecommerce';
            else if(Input::get('category') == 3)
                $plan->category = 'Fashion';
            else if(Input::get('category') == 4)
                $plan->category = 'Technology';
            else if(Input::get('category') == 5)
                $plan->category = 'Travel';
            else if(Input::get('category') == 6)
                $plan->category = 'Food';
            else if(Input::get('category') == 7)
                $plan->category = 'Social Media';
            else if(Input::get('category') == 8)
                $plan->category = 'Business';
        }


        $plan->save();
        //dd($plan);
       return back()->with('success', 'Thanks for Submitting Your Website for our Free Review Plan!');
    }
}
