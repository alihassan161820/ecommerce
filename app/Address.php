<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
        protected $table = 'address';
        public $timestamps = false;
        public $primaryKey  = 'users_id';


        
        public function user(){
                return $this->belongsTo(User::class);
        }
}
