<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;
use App\User;
use App\Session;
use App\Bid;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\ItemPhoto;
use App\Category;
use Carbon\Carbon;

class BidController extends Controller
{

function __construct()
{
    
}


public function postData(Request $request){
     
if(Auth::check())
    {
   
   
    $BidCount = 0;
    $activate = false;
     $coin = $request['bid_coins'];

    $increaments=0;
    $user  =  User::where('id',Auth::user()->id)->get()->first();
    $id = $request['auction_id'];
   
    $all = Bid::where('auction_id',$request['auction_id'])->get()->first();

    $clicks = 0;
    $auct =Auction::where('id',$request['auction_id'])->get()->first();

    if($all){

      $min =($all->Amount ) + 0.25;
      $max =ceil(($all->Amount ) +  (($all->Amount ) * 0.2));
      $validator = $this->validate($request, [
    
    'bid_coins' => 'required|min:' . $min . '|max:' . $max . '|numeric'

]);

    if($all->clicks < 2 || $all->users_id != Auth::user()->id){


        $activate = true;

      //$maxBid = Bid::where('AuctionID',$request['auction_id'])->max('bid_coins');
        
     // dd($all->bid_coins);
   if($all->users_id == Auth::user()->id){
          
        $clicks = $all->clicks; 
        $clicks++;
        
       
  
         session(['bidUserID' => $all->users_id]);

         Bid::where('auction_id',$request['auction_id'])
            ->update([ 
                      'clicks' => $clicks ,
                      'Amount' =>  $coin ,
                      'users_id' => Auth::user()->id,
                      'Date'    => Carbon::now()

                         ]);
             
   }
   else if($all->users_id != Auth::user()->id){
   
         session(['bidUserID' => $all->users_id]);
         $clicks = 1;
        
         Bid::where('auction_id',$request['auction_id'])
            ->update([
                      'clicks' => $clicks ,
                      'Amount' =>  $coin ,
                      'users_id'    => Auth::user()->id,
                      'Date'      => Carbon::now()
                      ]);
            
   }
    
    
         
    }
}
    else{

     $auct =Auction::where('id',$request['auction_id'])->get()->first();
   
      $min =( $auct->StartingPrice) + 0.25;
      $max =( $auct->StartingPrice) +  (($auct->StartingPrice) * 0.2);
      $validator = $this->validate($request, [
    
      'bid_coins' => 'required|min:' . $min . '|max:' . $max . '|numeric'
]);
        $startPrice = Auction::where('id',$request['auction_id'])->get()->first();
        $Bids =new Bid();
        $Bids->Amount =$request['bid_coins'];
        $Bids->auction_id =$request['auction_id'];
        $Bids->users_id    =Auth::user()->id;
        $Bids->Date      =Carbon::now();
        $Bids->clicks     =1;
        $Bids->save();

        session(['bidUserID' => $Bids->users_id]);
    }  
    
    session(['activate' => $activate]);


    $auctions = Auction::all();

     
 
return redirect('auction/' . $request['auction_id']);
  
        
    }


      return redirect('/login');

}


}

     