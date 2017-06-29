<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public static function address($user_id){
            return static::join('address','address.users_id','users.id')
                    ->where('users.id','=',$user_id)
                    ->select('address.users_id','address.Country','address.City','address.Street')
                    ->get();
    }
    public function gender()
    {
        if(Auth::user()->gender == 'f')
                      {return "Female";} 
                        
                       
                       elseif(Auth::user()->gender == 'm')
                      { return "male";}
    }
}
