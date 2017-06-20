<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

// public  $id= Auth::id();
public function gender()
    {

        if(Auth::user()->gender == 1)
                      {return "Female";} 
                        
                       
                       elseif(Auth::user()->gender == 0)

                      { return "male";}
    }


    
public static function address($user_id){
    return static::join('address','address.UserID','users.id')
                    ->where('users.id','=',$user_id)
                    ->select('address.Country','address.City','address.Street')
                    ->get();
}



/*public function country() {
     // return  $this->hasMany('App\Address');
    return $d= DB::table('users')->Join('address', 'address.UserID','users.id')->where('users.id', Auth::User()->id)
->select('Country')
 ->get();



       
    }

    public function city() {
     // return  $this->hasMany('App\Address');
    return $d= DB::table('users')->Join('address', 'address.UserID','users.id')->where('users.id', Auth::User()->id)
->select('City')
 ->get();


       
    }
    public function street() {
     // return  $this->hasMany('App\Address');
    return $d= DB::table('users')->Join('address', 'address.UserID','users.id')->where('users.id', Auth::User()->id)
->select('Street')
 ->get();


       
    }*/
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age','gender','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
