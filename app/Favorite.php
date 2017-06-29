<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
            protected $table = 'favorite';
            public $timestamps = false;

            public static function favoriteProducts ($user_id)
            {
                return static::where('users_id','=',$user_id)->get();
            }


            public static function favoriteProductsDetails ($user_id)
            {
                return static::where('favorite.users_id','=',$user_id)
                                    ->join('products','products.id','favorite.product_id')
                                    ->join('itemphotos','products.id','=','itemphotos.product_id')
                                    ->leftjoin('auction','auction.id','=','products.auction_id')
                                    ->leftjoin('bid','auction.id','bid.auction_id')
                                    ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*','auction.*','bid.Amount')
                                    ->get();
            }
}
