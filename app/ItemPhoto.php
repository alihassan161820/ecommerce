<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ItemPhoto extends Model
{

        protected $table = 'itemphotos';
        public $timestamps = false;
        public $primaryKey  = '_id';


        public function product(){
                return $this->belongsTo(Product::class);
         }

}
