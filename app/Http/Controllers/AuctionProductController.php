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
use App\Subcategory;
use Response;
use Carbon\Carbon;

class AuctionProductController extends Controller
{
   public function __construct()
{
   
  
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
             'category' => 'required', 
             'subcategory' => 'required', 
             'units' => 'required|numeric|min:0',
             'starting_price' => 'required|numeric|min:0.00',
             'buy_now_price' => 'required|numeric|min:0.00',
             'target_price' => 'required|numeric|min:0.00'
             
             ]);


      $period = Input::get('period');
      $cat = Input::get('city');
    


      $auc =new Auction();
      $auc->StartingPrice =$request['starting_price'];
      $auc->BuyNow =$request['buy_now_price'];
      $auc->creator_id = Auth::user()->id;
      $auc->TargetPrice =$request['target_price'];
      $auc->EndTime =$period;
      $auc->save();

      $con = Input::get('condition') == 'used' ? 'used' : 'new';
      $item = new Product();
      $item->Name =$request['name'];
      $item->seller_id = Auth::user()->id;
      $item->condition = $con;
      $item->subcategory_id = $request['subcategory'];
      $item->City =$request['city'];
      $item->Description =$request['description'];
      $item->Units =$request['units'];
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
              $bid = new Bid;
              $bid->users_id = 0;
              $bid->Amount = $auc->StartingPrice;
              $bid->auction_id = $auc->id;
              $bid->save(); 
          
//bhot data product fe session 
  

    // session(['aucname' => $auc->name ,'auccondition'=> $auc->condition ,  'aucstartingprice' => $auc->starting_price , 'aucbuynowprice' => $auc->buy_now_price , 'aucdescription' =>$auc->description , 'auctargetprice' => $auc->target_price] , 'aucnoofunit' => $auc->no_of_unit , 'aucendtime' =>$auc->end_time);

    // return redirect('/auction/{{ $auc->id }}');

      return redirect('/auction/' . $auc->id);
    }

  
    public function show($id)
    {
        $auction = Auction::find($id);
        
        if(is_null($auction)){
          return view('errors.notfound');
        }

        $product = Product::where('auction_id' , $auction->id)->get()->first(); 
        if(is_null($product)){
          return view('errors.404');
        }
        $item_photos = ItemPhoto::where('product_id',$product->id)->get();
        $bids = Bid::where('auction_id',$auction->id)->get()->first();

     $similarPhoto;
     $similarProducts = Product::where('subcategory_id',$product->subcategory_id)->get();

     foreach($similarProducts as $similarProduct){

          if($similarProduct->id != $product->id){

            $similarPhoto = ItemPhoto::where('product_id',$similarProduct->id)->get()->first();

          if(!is_null($similarPhoto)){
            
            Session([$similarProduct->id => $similarPhoto->Photos]);
          }
          }
          
         
     }

          if($bids){
            session(['bidUserID' => $bids->users_id]);
            // if($bids->clicks == 2){
            //  session(['activate' => false]);
            // }
          }
     
          //dd($bids->clicks);

       return view('website.auction-details' , compact('auction' ,'product','item_photos','bids' ,'similarProducts' ,'similarPhoto'));
        
    }

    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy(Request $request)
    {
     
       $auction_id = $request['auction_id'];
       $product = Product::where('auction_id' , $auction_id)->get()->first();
       $bid  = Bid::where('auction_id' , $auction_id)->delete();
       $auction = Auction::find($auction_id)->delete();
       $photo = ItemPhoto::where('product_id', $product->id)->delete();
       $product = Product::where('auction_id' , $auction_id)->delete(); 

       


        return redirect('/');
        // Redirect::route('home');


    }
     public function confirmation(Request $request){
     
      $confirm = Auction::where('id',$request['auction_id'])
                                                            ->update(['confirmation' => 1]);

          return redirect('auction/' . $request['auction_id']);
    }
    public function getCategory(Request $request)
    {
          if ($request->ajax()) {
       $cat_id = Input::get('cat_id');
           $subcategory = Subcategory::where('categorry_id','=',$cat_id)->get();
            return Response::json(['success' => json_encode($subcategory)], 200);
    }
  }



//     public function updateBid(Request $request){

//           if ($request->ajax()) {
//             return Response::json(['success' => json_encode('success')], 200);

// }
//     }
    

    public function getInfo(Request $request){
      $auction = Auction::find($request['auction_id']);
         $bids = Bid::where('auction_id',$auction->id)->get()->first();

        if($auction->EndTime <= Carbon::now())
                { 

              if($auction->StartingPrice < $bids->Amount)
              { 

                if(Auth::user()->id == $auction->creator_id)
                 {
               
                Auction::where('id' , '=' , $auction->id)
                                                        ->update([
                                                                   'winner_id' => $bids->users_id
                                                                  ]);
                $auctions = Auction::find($auction->id);

                $info = User::where('id','=',$auctions->winner_id)->get()->first();

                

                return view('website.info',compact('info'));

              }else if(Auth::user()->id != $auction->creator_id){
                  
                $auctions = Auction::find($auction->id);

                $info = User::where('id','=',$auctions->creator_id)->get()->first();
                 

                return view('website.info',compact('info'));
    }
}
}
}
}