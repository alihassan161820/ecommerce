<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Bid;
use App\Product;
use App\Auction;
use App\Categorry;
use App\ItemPhoto;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class AuctionProductController extends Controller
{
   public function __construct()
{
   
       $this->middleware('auth' , ['execpt' => 'show']);
    
       return redirect('/login');    

}
    
    public function getCreate()
    {
        if(!Auth::check())
    {
        return redirect()->route('login');
    }
        $id = Auth::user()->id;

       $user = User::where('id', $id)->first();

// //dd($user->fully_confirmed);

    
//     if($user->fully_confirmed == 0)
//     {

//       return redirect('/fullyregistered');
//     }


       return view('website.create-auction');
    }

  
    public function storeItem(Request $request ,UploadRequest $photoRequest)
    {
      
 
        $this->validate($request,[
             'name' => 'required',
             'description' => 'required',
             'city' => 'required',    
             'units' => 'required|numeric|min:0',
             'starting_price' => 'required|numeric|min:0.00',
             'buy_now_price' => 'required|numeric|min:0.00',
             'target_price' => 'required|numeric|min:0.00',
             'end_time' => 'required'
             ]);

      $auc =new Auction();
      // $auc->creator_id =auth()->id();
      // $auc->creator_id = Auth::user()->id;
      $auc->StartingPrice =$request['starting_price'];
      $auc->period =$request['period'];
      $auc->BuyNow =$request['buy_now_price'];
      $auc->creator_id =3;
      $auc->TargetPrice =$request['target_price'];
      $auc->EndTime =$request['end_time'];
      $auc->save();

      $con = Input::get('condition') == 'used' ? 'Used' : 'New';
      $item = new Product();
      $item->name =$request['name'];
       $item->condition = $con;
      $item->city =$request['city'];
      $item->description =$request['description'];
      $item->units =$request['units'];
      $item->auction_id = $auc->id;
      $item->save();

    $itemphoto = new ItemPhoto();

  foreach ($photoRequest->Photos as $photo) {
//                    //store photo at public/item_image Matel3abesh fe el satr dah ela lma t2olele
           
$itemphoto = new ItemPhoto();
                $fileName = $photo->getClientOriginalName();

                $image_thumb =Image::make($photo)->resize(300,300)->stream();

                $uploaded = Storage::disk('product_image')->put($item->id . $fileName,$image_thumb->__toString());
 
                $itemphoto->product_id =$item->id ;
                $itemphoto->Photos = $item->id . $fileName;

                $itemphoto->save();

           // $Photo = $photo->store('public/item_image');

           // $itemphoto->ItemID = $product->id ;
            
           // $itemphoto->Photos = $Photo;
          
           // $itemphoto->save();
// ItemPhoto::create([
//           'ItemID' => $prod->id,
//           'Photos' => $Photo
//   ]);
           
        }
        //dd($auc->id);

           
          
//                  //dh 3shan ana bgarab ahot kol el images we ab3atha fe blade 3shan azherha
              $item_photos = ItemPhoto::where('product_id',$item->id)->get();
             session([
              
              'item_photos' => $item_photos

              ]);
          
//bhot data product fe session 
  

    // session(['aucname' => $auc->name ,'auccondition'=> $auc->condition ,  'aucstartingprice' => $auc->starting_price , 'aucbuynowprice' => $auc->buy_now_price , 'aucdescription' =>$auc->description , 'auctargetprice' => $auc->target_price] , 'aucnoofunit' => $auc->no_of_unit , 'aucendtime' =>$auc->end_time);

    // return redirect('/auction/{{ $auc->id }}');

      return redirect('/auction/' . $auc->id);
    }

  
    public function show($id)
    {
        $auction = Auction::find($id);
        $product = Product::where('auction_id' , $auction->id)->get()->first(); 
        $item_photos = ItemPhoto::where('product_id',$product->id)->get();
        $bids = Bid::where('auction_id',$auction->id)->get()->first();

          if($bids){
            session(['bidUserID' => $bids->UserID]);
            // if($bids->clicks == 2){
            //  session(['activate' => false]);
            // }
          }
       
    
       return view('website.auction-details' , compact('auction' ,'product','item_photos','bids'));
        
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
