<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  

    use RegistersUsers;

    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

  
    protected function validator(array $data)
    {
  
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'password-confirm' => 'required|same:password',
        ]);
    


    }
    protected function create(array $data)
    {
        Session::flash('status','Registered! but verify your email to activate your account');
       
        $token =str_random(25);
       
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     'token' => $token

        // ]);
        $user = new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['name']);
        $user->token=$token;
         $user->save();

        $thisUser = User::findOrFail($user->id);
         
        $this->sendEmail($thisUser);

        return $user;
    }
    public function sendEmail($thisUser)
    {

       //dd('ana hna');
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    public function sendEmailDone($email,$token)
    {
      
      
        $user =User::where(['email' =>$email , 'token' => $token])->first();
       $state;

        if($user)
        {
            
             $con_user = user::where(['email'=> $email, 'token' => $token])->update(['confirmed'=>'1' , 'token'=>null]);
                 Auth::login($user);
             return view('website.mail.success',['con_user' => $con_user,'state' => true]);
        }
        return view('website.mail.success',['state' => false]);
    }
    
}