<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
class Categorry extends Model
{
            protected $table = 'categorry';
            public $timestamps = false;


            public static function categories ()
            {
                return static::get()->sortBy('Name');
            }


            public function subcategories(){
                return $this->hasMany(Subcategory::class);
            }
            
}
