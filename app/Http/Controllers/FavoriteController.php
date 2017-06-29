<?php

namespace App\Http\Controllers;
use App\Favorite;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FavoriteController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth',['only'=>'index']);
    }

    public function index()
    {   
        $favorites = Favorite::favoriteProductsDetails(Auth::user()->id);
        // return dd($favorites);
        return view('website.favorite',compact('favorites'));
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
       if ($request->ajax()) {
			$favorite = new Favorite;
			$favorite->product_id = Input::get('product_id');
            $favorite->users_id=Auth::user()->id;
			$favorite->save();
			print_r(Input::get('product_id'));
		}
    }

    public function show($id)
    {
        //
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
           if ($request->ajax()) {
			$favorite = new Favorite;
			$product_id = Input::get('product_id');
            $favorite->where('users_id','=',Auth::user()->id)
                           ->where('product_id','=',$product_id)
                           ->delete();
			print_r($favorite);
		}
        else{
            if ($request){
                $favorite = Favorite::where('users_id','=',Auth::user()->id)
                               ->where('product_id','=',$request->id)
                               ->delete();
                return redirect('/favorite');
            }
        }
    }
}
