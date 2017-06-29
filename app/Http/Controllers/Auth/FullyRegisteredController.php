<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullyRegisteredController extends Controller
{
    
    use RegistersUsers;

        
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

       return redirect('/')
      // return redirect()->route('home')->with('enter','you are fully registered');
      //->route('home')->with(['success' => 'Successfully Created an auction'])
    }
}
