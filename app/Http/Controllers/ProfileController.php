<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Address;
use App\User;
class ProfileController extends Controller
{
	public function __construct()
{
    $this->middleware('auth');
}
   public function index()
    {
    	
    	$address = User::address(Auth::User()->id)->first();
        return view('website.profile',compact("address"));
    }



    public function editProfileForm()
    {
    	$address = User::address(Auth::User()->id)->first();
    	return view('website.editProfile',compact('address'))->with('data',Auth::user());
    }

    public function updateProfile(Request $request)
    {
    	// $address = User::address(Auth::User()->id)->first();
    	// $ad=$request->$address;
    	// $user=Auth::user();
    	 $user_id = Auth::user()->id;
    	 if ($request->hasFile('avatar'))
       {
    	 $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $filename= $file->store('users');
		 DB::table('users')->where('id', $user_id)->update(['avatar' => $filename]);
		}

        
     
    			 if($request->gender == 'female')
                      {
                      $request->gender = '1';
                  	} 
                        
                       
                       else

                      { 

                      $request->gender = '0';
                  		}
        DB::table('users')->where('id', $user_id)->update(['name'=>$request->name,'age'=>$request->age,'gender'=>$request->gender,'phone'=>$request->phone,]);
        DB::table('address')->where('UserID', $user_id)->update(['City'=>$request->City,'Country'=>$request->Country,'Street'=>$request->Street]);
        return back();

    }


}
