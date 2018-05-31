<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;
use DB;

class AdminAboutController extends Controller
{
    public function getAbout(){
    	$data = DB::table('about')->get();
    	return view('Admin.AdminAboutUs')->with('data', $data);
    }

    public function postAbout(Request $request){
    	About::create($request->all());

    	return back()->with('success', 'Thanks for Submitting About Us!');
    }
}
