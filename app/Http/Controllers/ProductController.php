<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UploadRequest;
use App\User;
use Illuminate\Http\Request;
use App\Product;
use App\Auction;
use App\Categorry;
use App\ItemPhoto;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;
use Storage;
use App\Subcategory;
use Response;




class ProductController extends Controller
{

 public function __construct()
        {   
            // if(!$this->middleware('auth'))
            // {
            //     return redirect('/home');
            // }
        }


        public function getcreate()
        {
            if(!Auth::check())
            {
                    return redirect('/home');
            }

            $id = Auth::user()->id;
            $user = User::where('id', $id)->first();

            // if($user->fully_confirmed == 0)
            // {
            //     return redirect('/fullyregistered');
            // }
            return view('website.create-product');
        }

        
        public function storeItem(Request $request,UploadRequest $photoRequest)
        {
 
            $this->validate($request,[
                    'name' => 'required',
                    'city' => 'required',
                    'description' => 'required|max:255',
                     'category' => 'required', 
                    'subcategory' => 'required', 
                    'price' => 'required|numeric|min:0.00',
                    'Condition' => 'required',
                    'units' => 'required|numeric|min:1'
                    ]);
            
            $product =new Product();
            $product->Name =$request['name'];
            $product->condition =$request['condition'];
            $product->Description =$request['description'];
            $product->City =$request['city'];

            $con = Input::get('condition') == 'used' ? 'used' : 'new';
            $product->condition = $con;
            $product->Price =$request['price'];
            $product->subcategory_id = $request['subcategory'];
            $product->Units =$request['units'];
            $product->Availability =1;
            $product->seller_id = Auth::user()->id;
            $product->save();

            $available= $product->Availability == 1 ? 'available for buying' : 'Sold';      
            $itemphoto = new ItemPhoto();

            foreach ($photoRequest->Photos as $photo)
            {
                $itemphoto = new ItemPhoto();
                $fileName = $photo->getClientOriginalName();

                $image_thumb =Image::make($photo)->resize(300,300)->stream();

                $uploaded = Storage::disk('product_image')->put($product->id . $fileName,$image_thumb->__toString());
 
                $itemphoto->product_id =$product->id ;
                $itemphoto->Photos = $product->id . $fileName;

                $itemphoto->save();
                    // $Photo = $photo->store('public/item_image');
                    //     // $itemphoto->ItemID = $product->id ;
                    //     // $itemphoto->Photos = $Photo;
                    //     // $itemphoto->save();
                    // ItemPhoto::create([
                    //         'product_id' => $product->id,
                    //         'Photos' => $Photo
                    //     ]);            
                }
                
            $item_photos = ItemPhoto::where('product_id',$product->id)->get();

           // dd($item_photos);
            session([  
            'item_photos' => $item_photos
            ]);
                
            $request->session()->put('product', $product);
            return redirect('/item/' . $product->id);  
            }

    
  
    public function show($id)
    {
        $product = Product::find($id);
        if(is_null($product)){
            return view('errors.notfound');
        }
        $item_photos = ItemPhoto::where('product_id',$product->id)->get();
        $seller = User::where('id','=',$product->seller_id)->get()->first();
       
       $similarPhoto;
      $similarProducts = Product::where('subcategory_id',$product->subcategory_id)->get();

     foreach($similarProducts as $similarProduct){
          $similarPhoto = ItemPhoto::where('product_id',$similarProduct->id)->get()->first();
          
          if(!is_null($similarPhoto)){
            Session([$similarProduct->id => $similarPhoto->Photos]);
          }
         
     }
    

    


    return view('website.product-detail',[
        'product' => $product,
        'item_photos' => $item_photos,
        
        
         'similarProducts' => $similarProducts,
         'seller'=>$seller
         
        ]);
        // return view("website.product-detail" ,compact('product' ,'item_photos'));


}

    

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {

       $product_id = $request['product_id'];
       $product = Product::where('id' , $product_id)->delete(); 
       $photo = ItemPhoto::where('product_id', $product_id)->delete();
        return redirect('/');
        // Redirect::route('home');


    
    }
       public function getCategory(Request $request)
    {
          if ($request->ajax()) {
       $cat_id = Input::get('cat_id');
           $subcategory = Subcategory::where('categorry_id','=',$cat_id)->get();
            return Response::json(['success' => json_encode($subcategory)], 200);
    }
    }




        // public function storeItem(Request $request,UploadRequest $photoRequest)
        // {


        //     $this->validate($request,[
        //             'Name' => 'required',
        //             'Description' => 'required|max:255',
        //             'Price' => 'required|numeric|min:0.00',
        //             'Units' => 'required|numeric|min:1'
        //             ]);

        //     $product =new Product();
        //     $product->Name =$request['Name'];
        //     $product->Description =$request['Description'];
        //     $product->Price =$request['Price'];
        //     $product->Units =$request['Units'];
        //     $product->Availability =1;
        //     $product->seller_id = Auth::user()->id;
        //     $product->save();

        //     $available= $product->Availability == 1 ? 'Available for buying' : 'Sold';      
        //     $itemphoto = new ItemPhoto();

        //     foreach ($photoRequest->Photos as $photo)
        //     {
        //             $Photo = $photo->store('public/item_image');
        //                 // $itemphoto->ItemID = $product->id ;
        //                 // $itemphoto->Photos = $Photo;
        //                 // $itemphoto->save();
        //             ItemPhoto::create([
        //                     'product_id' => $product->id,
        //                     'Photos' => $Photo
        //                 ]);            
        //         }
                
        //     $item_photos = ItemPhoto::where('product_id',$product->id)->get();
        //     session([  
        //     'item_photos' => $item_photos
        //     ]);
                
        //     $request->session()->put('product', $product);
        //     return redirect('item');  
        //     }



}