<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
Use App\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);


    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' =>$request->password

    		]))
    	{
    		$user = User::where('email', $request->email)->first();
           
    		if($user->is_admin())
    		{
    			return redirect('/dashboard');
    		}

    		return redirect('/user-dashboard');
    	}	

    	return redirect()->back();
    }


    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
