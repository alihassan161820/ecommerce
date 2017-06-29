<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Bid;
class Auction extends Model
{
    protected $table = 'auction';
    public $timestamps = false;

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class);
    }
}
