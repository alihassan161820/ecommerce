<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Auth;

class FullyRegisteredController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getfullyRegistered()
    {
       
      return view('auth.fullyregistered');
      
    }
    public function fullyRegistered(Request $request)
    {
        $this->validate($request,[
             'birthday' => 'required',
             'address' => 'required|max:255',
             'phone' => 'required|regex:/(01)[0-9]{9}/',
             'type' => 'required',
             'gender' => 'required'
        ]);
        
     $type = Input::get('type');
     $gender = Input::get('gender') == 'Male' ? 1 : 0;
     
    $user = Auth::user();
      $user->birthday =$request['birthday'];
      $user->address =$request['address'];
      $user->phone =$request['phone'];
      $user->type = $type;
      $user->gender = $gender;
      $user->fully_confirmed = 1;
      
      $user->save();

      return redirect()->route('home')->with('enter','you are fully registered');
      //->route('home')->with(['success' => 'Successfully Created an auction'])
    }
}