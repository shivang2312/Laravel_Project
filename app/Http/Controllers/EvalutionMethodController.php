<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\evalutionmethod;

class EvalutionMethodController extends Controller
{
    public function getMethod(){
    	return view('Admin.AdminEvalutionMethod');
    }

    public function postMethod(Request $request){
    	evalutionmethod::create($request->all());

    	return back()->with('success', 'Thanks for Submitting About Us!');
    }
}
