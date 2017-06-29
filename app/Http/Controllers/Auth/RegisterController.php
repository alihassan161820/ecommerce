<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use Illuminate\Foundation\Auth\RegistersUsers;
use Session;
use Mail;

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
           'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'password-confirm' => 'required|same:password',

            
        ]);
    }

    protected function create(array $data)
    {
         $gender = Input::get('gender') == 'Male' ? 1 : 0;

         
      Session::flash('status','Registered! but verify your email to activate your account');
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'token' => str_random(25),
            'gender' => $gender
        ]);
         
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
             return view('auth.password.mails.successmails.success',['con_user' => $con_user,'state' => true]);
        }
        return view('auth.password.mails.success',['state' => false]);
    }
}
