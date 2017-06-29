<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorry;
use App\Subcategory;
use Illuminate\Support\Facades\Auth;    
use App\Favorite;



class FilteredProduectController extends Controller
{
    public function show($city , $product = null)
    {   
        //latest product
        if($city === 'ads' && $product === null ){
                $products = Product::latestProds();
                 if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites'));            
                }
                else{
                        return view('website.filtered-products',compact('products'));            
                }              
        }
        //ads/car
        if($city === 'ads' && $product != null ){
                $products = \Search::search(
                        "Product",
                        ['Name', 'Description','City'],
                        $product,
                        ['Name','Price','City','created_at','products.id','Photos','products.auction_id','auction.*','Amount'],
                        ['created_at','desc'],
                        false 
                        )->join('itemphotos','products.id','=','itemphotos.product_id')
                         ->leftjoin('auction','auction.id','=','products.auction_id')
                         ->leftjoin('bid','auction.id','bid.auction_id')
                         ->get();
                if (Auth::check()){
                $favorites = Favorite::favoriteProducts(Auth::user()->id);
                return view('website.filtered-products-adv',compact('products','favorites'));       
                // return dd($products);
                }
                else{
                        return view('website.filtered-products-adv',compact('products'));            
                }           
        }
        
        if($city!='ads' && $product === null){
                $products = Product::getProductByCity($city);
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites'));            
                }
                else{
                          return view('website.filtered-products',compact('products'));            
                }      
          }
        else {
            $products =\Search::search(
                    "Product",
                    ['Name', 'Description','City'],
                    $product,
                    ['Name','Price','City','created_at','products.id','Photos','products.auction_id','auction.*','Amount'],
                    ['created_at','desc'],
                    false
                    )->where('City',$city)
                     ->join('itemphotos','products.id','=','itemphotos.product_id')
                        ->leftjoin('auction','auction.id','=','products.auction_id')
                        ->leftjoin('bid','auction.id','bid.auction_id')
                        ->get();
                 if (Auth::check()){
                $favorites = Favorite::favoriteProducts(Auth::user()->id);
                return view('website.filtered-products-adv',compact('products','favorites'));       
                }
                else{
                        return view('website.filtered-products-adv',compact('products'));            
                }              
        }
    }

    public function showProductsByCategory($category,$subcategory=null){
        if($subcategory!=null){
                $products =  Product::getProductBySubcategory($subcategory);                
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites'));            
                }
                else{
                          return view('website.filtered-products',compact('products'));            
                }
        }       

        else
        {
                $products =  Product::getProductByCategory($category);
                 if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        // dd($products);
                        return view('website.filtered-products-adv',compact('products','favorites'));            
                }
                else{
                          return view('website.filtered-products-adv',compact('products'));            
                }
        }
    }

    public function get($cat=""){
          
            if($cat=="latestProds"){       
                $products = Product::latestProds();          
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites'));            
                }
                else{
                          return view('website.filtered-products',compact('products'));            
                }
            }

            if($cat=="featuredProds"){
                $products = Product::featuredProds();
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites'));            
                }
                else{
                        return view('website.filtered-products',compact('products'));            
                }           
            }

            if($cat=="hotAuctions"){
                    
            }
    }
}
