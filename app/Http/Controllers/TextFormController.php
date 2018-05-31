<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Plans;
use App\Product;
use Input;
use Auth;

class TextFormController extends Controller
{
    public function getTextForm(){
    	return view('pages.textform');
    }

    public function getPaymentPage(){
        $products = Product::where('id', '1')->get();
       // dd($products);
        return view('user.getTextPaymentPage',compact('products'));
    }

    public function postTextForm(Request $request){
    	$this->validate($request, [
        		'websitename' => 'required',
        		'websiteurl' => 'required',
        		'ownername' => 'required',
        		//'designername' => 'required',
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


        return back()->with('success', 'Thanks for Submitting Your Website For Our Text Review Plan!');
    }
}
