<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorry;
use App\Product;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $featuredProds = Product::featuredProds();
        $latestProds = Product::latestProds();
        
        return view('website.index',compact('featuredProds','latestProds'));
    }
    
}
