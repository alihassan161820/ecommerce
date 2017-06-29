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

//    public function postData(Request $request){
//    // $bidding =new Bid();
//     $increaments=0;
//     $validator = $this->validate($request, [
    
//     'bid_coins' => 'required|min:1|max:50|numeric

// '
// ]);

//     $count = 0;



    
//     $auctions = Auction::all();
     
// if(session::get('amount.' . $request['auction_id'])){
//      $increaments = $request['bid_coins'] + session::get('amount.' . $request['auction_id']);
      
//      session(['amount.' . $request['auction_id'] => $increaments , 'when' => true]);

// $bids =[
//         Auth::user()->id => ['auc_id' => $request['auction_id'] , 'amounts.' . $request['auction_id'] => $increaments ]
//         ];
       
//         session()->push('aucs', $bids);

          
       


// return redirect('auction/' . $request['auction_id'])->withErrors($validator)->withInput();

// }
// session()->put('aucs',[]);

//  $increaments += $request['bid_coins'];
 
// session([ 'auction_id' => $request['auction_id'] , 'amount.' . $request['auction_id'] => $increaments , 'when' => true]);
 
// return redirect('auction/' . $request['auction_id']);

// }
//    public function getjs(){

//         // $auction = Auction::find($id);
//         // $item = Item::find($id);
//         // return view('Auction.show_auction' , compact('auction' ,'item'));
// //         Session::push('bids', [
// //          'aucid' => 1,
// //          'userid' => 2,
// //          'bidvalue' => 12

// // ]);  
//         $tmp = array('aucid' => 1,'userid' => 2,'bidvalue' => 12);;
//         $infokey ='';
//         $infovalue ='';

//         foreach ($tmp as $key => $value) {

          
//             $infokey =  $infokey .',' . $key; 
//             $infovalue = $infovalue . ',' .$value; 
           

//         }
//         //  dd($infovalue);
//          $myString = "9,admin@example.com,8";
//          $myArray = explode(',', $myString);
//         // dd($myArray);



//          // $tmp =  Session::get('bids');
//         // $tmp = 6;   $infovalue = array('aucid' => 1,'userid' => 2,'bidvalue' => 12);;
      
//         //   $newnumbers = implode(',', $infokey);
//          return view('website.auction-details' ,compact('infovalue'));

       
// }


//-------------------------------------------------------------------------------------- new 


//dd((session('activate') ) );

//dd(((session('bidcount') < 2) || !($userID == session('bidUserID'))));
// $userID = Auth::user()->id;
// if(((session('bidcount') < 2) || !($userID == session('bidUserID'))))
// {
    
    
//     if($userID == session('bidUserID') ) {
// //dd('asdf');
//         $BidCount = session('bidcount') + 1;
//         session(['bidcount' => $BidCount]);
//     }
//     else if(!session('bidUserID')){
//        // dd('asdf');
//         session(['bidUserID' => $userID]);
//         $BidCount ++;
//         session(['bidcount' => $BidCount]);
//     }
//     else{
//        // dd('5osh');
//         session(['bidUserID' => $userID]);
//         $BidCount = 1;
//         session(['bidcount' => $BidCount]);
//     }

// }
// else if(session('bidcount') == 2){

//     $activate = false;
//     session(['activate' =>$activate]);
// }

//dd(session('bidcount'));
    


public function postData(Request $request){
     
if(Auth::check())
    {
      
     //dd(session('bidcount'));   
      // $bidding =new Bid();

    $user_id = 0;
    $BidCount = 0;

    $activate = false;

    $increaments=0;
    $validator = $this->validate($request, [
    
    'bid_coins' => 'required|min:1|max:50|numeric

'
]);

    $user     =  User::where('id',Auth::user()->id)->get()->first();

$all = Bid::where('auction_id',$request['auction_id'])->get()->first();


   

    if($all){

    if($all->clicks < 2 || $all->users_id != Auth::user()->id){


        $activate = true;
      //$maxBid = Bid::where('AuctionID',$request['auction_id'])->max('bid_coins');
        
     // dd($all->bid_coins);
        $clicks = 0;
        


   if($all->users_id == Auth::user()->id){

        $clicks = $all->clicks; 
        $clicks++;

                 session(['bidUserID' => $all->users_id]);
                 Bid::where('auction_id',$request['auction_id'])->update([ 
                                                                          'clicks' => $clicks ,
                                                                          'bid_coins' => $all->bid_coins + $request['bid_coins'],
                                                                          'users_id'    => Auth::user()->id,
                                                                          'Date'      => Carbon::now()

                                                                             ]);
   }
   else if($all->user_id != Auth::user()->id){
         session(['bidUserID' => $all->users_id]);
         Bid::where('auction_id',$request['auction_id'])->update([
                                                                'bid_coins' => $all->bid_coins + $request['bid_coins'],
                                                                'users_id'    => Auth::user()->id,
                                                                'Date'      => Carbon::now()
                                                                ]);
   }
    
    
         
    }
}
    else{
        $Bids =new Bid();
        $Bids->bid_coins =$request['bid_coins'];
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

     
// if(session::get('amount.' . $request['auction_id'])){
    
//      $increaments = $request['bid_coins'] + session::get('amount.' . $request['auction_id']);
      
//      session(['amount.' . $request['auction_id'] => $increaments , 'when' => true]);
        
// $bids =[
//         Auth::user()->id => ['auc_id' => $request['auction_id'] , 'amounts.' . $request['auction_id'] => $increaments ]
//         ];
       
//         session()->push('aucs', $bids);

//          session(['auction' . $request['auction_id'] => [ 'user_id' => Auth::user()->id , 'amount.' . $request['auction_id'] => $increaments ]]);  
       


// return redirect('auction/' . $request['auction_id'])->withErrors($validator)->withInput();

// }
// session()->put('aucs',[]);
// $Bids->bid_coins =$request['bid_coins'] + $maxBid;
//     $Bids->AuctionID =$request['auction_id'];
//     $Bids->UserID    =Auth::user()->id;
//     $Bids->Date      =Carbon::now();
//     $Bids->save();
//  $increaments += $request['bid_coins'];
//  session( [$request['auction_id'] => [ 'user_id' => Auth::user()->id , 'amount.' . $request['auction_id'] => $increaments ]]);
// session([ 'auction_id' => $request['auction_id'] , 'amount.' . $request['auction_id'] => $increaments , 'when' => true]);
 

