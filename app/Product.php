<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorry;
use App\Subcategory;
use App\ItemPhoto;
use App\Auction;

class Product extends Model
{       
     protected $dates = ['created_at', 'updated_at'];

     protected $table = 'products';
     protected $fillable =['product_id','Name, Description, Price, SubCategoryID, Units, ItemRate, subcategory_id'];
        
     public function itemPhotos(){
            return $this->hasMany(ItemPhoto::class);
        }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
        }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    public static function featuredProds ()
    {
        return static::join('users','products.seller_id','=','users.id')
                                ->join('itemphotos','products.id','=','itemphotos.product_id')
                                ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*')
                                ->where('users.verified','=','1')->get();
    }

    public static function latestProds ()
    {
        return static::join('users','products.seller_id','=','users.id')
                                ->join('itemphotos','products.id','=','itemphotos.product_id')
                                ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*')
                                ->latest()->get();
    }

        public static function latestProdslimit ()
    {
        return static::join('users','products.seller_id','=','users.id')
                                ->join('itemphotos','products.id','=','itemphotos.product_id')
                                ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*')
                                ->latest()->limit(12)->get();
    }

    public static function getProductByCity($city)
    {
        return static::where('City','=', $city)
                            ->join('itemphotos','products.id','=','itemphotos.product_id')
                            ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*')
                            ->get();
    }

    public static function getProductByCategory($category)
    {
        return Subcategory::join('categorry','subcategory.categorry_id','=','categorry.id')
                                                ->join('products','products.subcategory_id','=','subcategory.id')
                                                ->leftjoin('auction','auction.id','=','products.auction_id')
                                                ->leftjoin('bid','auction.id','bid.auction_id')
                                                ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*','auction.*','Amount')
                                                ->join('itemphotos','products.id','=','itemphotos.product_id')
                                                ->where('categorry.Name','=',$category)
                                                ->latest()->get();
    }

    // there is no function used it 
    public static function getProductBySubcategory($category)
    {
            return Product::join('subcategory','products.subcategory_id','=','subcategory.id')
                                     ->where('subcategory.Name','=',$category)
                                     ->join('itemphotos','products.id','=','itemphotos.product_id')
                                     ->select('products.Price','products.Name','products.created_at','products.City','products.id','products.auction_id','itemphotos.*')  
                                    ->latest()->get();
    }

    public static function getAuctions()
    {
        return Product::join('auction','auction.id','=','products.id')
                                     ->where('products.auction_id','!=','NULL')
                                     ->join('itemphotos','products.id','=','itemphotos.product_id')
                                     ->select('auction.*','products.Name','products.created_at','products.City','products.id','itemphotos.*')
                                     ->get();
    }



}
