<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\User;
use App\plans;
use Auth;

class AdminController extends Controller
{
    public function getUserList()
    {
    	$users = DB::table('users')->paginate(5);
        $plans = DB::table('plans')->get();
    	return view('Admin.UserList')->with('users', $users)->with('plans', $plans);
    }

    public function getTotalWebsites(){
        
    	$totalWebsites = DB::table('plans')->paginate(5);
    	return view('Admin.TotalWebsites', compact('totalWebsites'));
    }

    public function getReviewedWebsites(){
    	$reviewedWebsites = Plans::where('IsReviewed', '1')->paginate(5);
        //dd($reviewedWebsites);
    	return view('Admin.ReviewedWebsites', compact('reviewedWebsites'));
    }

    public function getRamainingWebsites(){
        $remainingWebsites = Plans::where('IsReviewed', '0')->paginate(5);
        return view('Admin.RamainingWebsites', compact('remainingWebsites'));
    }

    public function getFreePlanWebsites(){
        $freeplanwebsites = Plans::where('plan', '0')->paginate(5);
        return view('Admin.FreePlanWebsites', compact('freeplanwebsites'));
    }

    public function getTextPlanWebsites(){
        $textplanwebsites = Plans::where('plan', '1')->paginate(5);
        return view('Admin.TextPlanWebsites', compact('textplanwebsites'));
    }

    public function getVideoPlanWebsites(){
        $videoplanwebsites = Plans::where('plan', '2')->paginate(5);
        return view('Admin.VideoPlanWebsites', compact('videoplanwebsites'));
    }

    public function makeAdmin($id){
        $makeAdmins = DB::table('users')
            ->where('id', $id)
            ->update(['admin' => 1]);

        $makeAdmin = User::where('id', $id)->get();
        return view('Admin.makeAdmin', compact('makeAdmin'));

    }

    public function removeAdmin($id){
        $removeAdmin = DB::table('users')
            ->where('id', $id)
            ->update(['admin' => 0]);

            if(Auth::id() == $id)
                return redirect('/logout');
            else
            {
                $removeAdmin = User::where('id', $id)->get();
                return view('Admin.removeAdmin', compact('removeAdmin'));
            }
    }

    public function noRightsAdmin(){
        return view('Admin.noRightsAdmin');
    }

    
}
