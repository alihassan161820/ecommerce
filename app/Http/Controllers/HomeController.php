<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Http\Request;
use App\Categorry;
use App\Product;
use App\User;
use App\Auction;
use App\Favorite;
use Log;
use Illuminate\Support\Facades\Input;
use Response;

class HomeController extends Controller
{

    public function __construct()
    {
    }


    public function index()
    {  
        $featuredProds = Product::featuredProds();
        $latestProds = Product::latestProdslimit();
        $productcount = Product::count();
        $auctioncount = Auction::count();

        if (Auth::check()){
        $favorites = Favorite::favoriteProducts(Auth::user()->id);
            return view('website.index',compact('featuredProds','latestProds','favorites','productcount','auctioncount'));            
        }
        else{
            return view('website.index',compact('featuredProds','latestProds','productcount','auctioncount'));            
        }
    }
    
    public function updateBid(Request $request){
        if ($request->ajax()) {
		   $array = Input::get('idIndex');
           $auction = new Auction();
           $bids = $auction->join('bid','bid.auction_id','auction.id')
                                    ->select('auction.id','bid.Amount')                                    
                                    ->find($array);
            return Response::json(['success' => json_encode($bids)], 200);
		}
     
    }
}
