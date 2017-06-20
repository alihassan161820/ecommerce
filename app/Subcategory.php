<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorry;
use App\Product;


class Subcategory extends Model
{
            protected $table = 'subcategory';
            public $timestamps = false;


            public function categorry(){
                return $this->belongsTo(Categorry::class);
               }
            
            public function products(){
                return $this->hasMany(Product::class);
            }
}
