<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

            $city = $request->city;
            $product =$request->product;
            // /ads/car
            if ($city == null && $product != null){
                $url = (string)("/p"."/ads"."/{$product}");
                return redirect($url);
            }
            // /alexandria
            if ($city != null && $product == null){
                $url = (string)("/p"."/{$city}");
                return redirect($url);     
             }
            //  /ads
            if ($city == null && $product == null){
                return redirect("/p"."/ads/");                     
            }
            // /alexandria/car
            else {
               $url = (string)("/p"."/{$city}"."/{$product}");
                return redirect($url);            
                }
    }
    
}
