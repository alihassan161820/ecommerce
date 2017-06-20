<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorry;
use App\Subcategory;


class FilteredProduectController extends Controller
{
    public function show($city , $product = null)
    {   
        //latest product
        if($city === 'ads' && $product === null ){
                $products = Product::latestProds();
                return view('website.filtered-products',compact('products'));
        }
        //ads/car
        if($city === 'ads' && $product != null ){
                $products = \Search::search(
                        "Product",
                        ['Name', 'Description','City'],
                        $product,
                        ['Name','Price','City','created_at','id','Photos'],
                        ['created_at','desc'],
                        false 
                        )->join('itemphotos','products.id','=','itemphotos.product_id')
                         ->get();;
                        return view('website.filtered-products',compact('products','product'));
        }
        if($city!='ads' && $product === null){
                $products = Product::getProductByCity($city);
                return view('website.filtered-products',compact('products'));
        }
        else {
            $products =\Search::search(
                    "Product",
                    ['Name', 'Description','City'],
                    $product,
                    ['Name','Price','City','created_at','id','Photos'],
                    ['created_at','desc'],
                    false
                    )->where('City',$city)
                     ->join('itemphotos','products.id','=','itemphotos.product_id')
                    ->get();
                    return view('website.filtered-products',compact('products'));
        }
    }

    public function showProductsByCategory($category,$subcategory=null){
        if($subcategory!=null){
                // $category = Categorry::where('Name','=',$category)->first();
                // $all_subcategories = $category->subcategories()->get();
                // $subcategory = $all_subcategories->where('Name','=',$subcategory)->first();
                // $products = $subcategory->products;
                // $x = $products::join('itemphotos','itemphotos.product_id','id')->all();
                $products =  Product::getProductBySubcategory($subcategory);                
                return view('website.filtered-products',compact('products'));
        }       
        else
        {
                $products =  Product::getProductByCategory($category);
                 return view('website.filtered-products',compact('products'));

        }
    }
}
