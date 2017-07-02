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
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                        return view('website.filtered-products',compact('products','product'));            
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
                return view('website.filtered-products-adv',compact('products','favorites','product'));       
                // return dd($products);
                }
                else{
                        return view('website.filtered-products-adv',compact('products','product'));            
                }           
        }
        
        if($city!='ads' && $product === null){
                $products = Product::getProductByCity($city);
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                          return view('website.filtered-products',compact('products','product'));            
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
                return view('website.filtered-products-adv',compact('products','favorites','product'));       
                }
                else{
                        return view('website.filtered-products-adv',compact('products','product'));            
                }              
        }
    }

    public function showProductsByCategory($category,$subcategory=null){
        if($subcategory!=null){
                $product = $subcategory;
                $products =  Product::getProductBySubcategory($subcategory);                
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                          return view('website.filtered-products',compact('products','product'));            
                }
        }       

        else
        {       $product = $category;
                $products =  Product::getProductByCategory($category);
                 if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        // dd($products);
                        return view('website.filtered-products-adv',compact('products','favorites','product'));            
                }
                else{
                          return view('website.filtered-products-adv',compact('products','product'));            
                }
        }
    }

    public function get($cat=""){
          
            if($cat=="latestProds"){       
                $products = Product::latestProds();   
                $product = 'Latest Ads' ;
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                          return view('website.filtered-products',compact('products','product'));            
                }
            }

            if($cat=="featuredProds"){
                $products = Product::featuredProds();
                $product = 'Featured Ads';
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                        return view('website.filtered-products',compact('products','product'));            
                }           
            }

            if($cat=="hotauctions"){
                    $product = 'Hot Auctions';
                $products = Product::getHotAuctions();
                if (Auth::check()){
                        $favorites = Favorite::favoriteProducts(Auth::user()->id);
                        return view('website.filtered-products',compact('products','favorites','product'));            
                }
                else{
                        return view('website.filtered-products',compact('products','product'));            
                }    
            }
    }
}
