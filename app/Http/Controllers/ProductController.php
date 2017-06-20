<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Product;
use App\Auction;
use App\Categorry;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UploadRequest;
use App\ItemPhoto;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{

        public function __construct()
        {   
            if(!$this->middleware('auth'))
            {
                return redirect('/home');
            }
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
                    'Name' => 'required',
                    'Description' => 'required|max:255',
                    'Price' => 'required|numeric|min:0.00',
                    'Units' => 'required|numeric|min:1'
                    ]);

            $product =new Product();
            $product->Name =$request['Name'];
            $product->Description =$request['Description'];
            $product->Price =$request['Price'];
            $product->Units =$request['Units'];
            $product->Availability =1;
            $product->seller_id = Auth::user()->id;
            $product->save();

            $available= $product->Availability == 1 ? 'Available for buying' : 'Sold';      
            $itemphoto = new ItemPhoto();

            foreach ($photoRequest->Photos as $photo)
            {
                    $Photo = $photo->store('public/item_image');
                        // $itemphoto->ItemID = $product->id ;
                        // $itemphoto->Photos = $Photo;
                        // $itemphoto->save();
                    ItemPhoto::create([
                            'product_id' => $product->id,
                            'Photos' => $Photo
                        ]);            
                }
                
            $item_photos = ItemPhoto::where('product_id',$product->id)->get();
            session([  
            'item_photos' => $item_photos
            ]);
                
            $request->session()->put('product', $product);
            return redirect('item');  
            }
}