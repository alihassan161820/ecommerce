<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
         protected $table = 'products';
        protected $fillable =['Name, Description, Price, SubCategoryID, Units, ItemRate, SubCategoryID'];
        

}
