<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;

class UploadController extends Controller
{
   
    public function uploadForm()
    {
    	
        return view('upload_form');
    }
 
    public function uploadSubmit(UploadRequest $request)
    {
    	//dd($request->all());
        //$item = Item::create(array_except($request->all(), ['_token']));

        //$itemphoto = $item->auction()->associate($auction)->save();
        foreach ($request->photos as $photo) {
            $filename = $photo->store('public');
           
            
        }
        $itemphoto = new ItemPhoto();

           $itemphoto->name = $request['name'];
           $itemphoto->filename = $filename;
           $itemphoto->save();

              $itemphoto->item()->associate(session('item'))->save(); 
             session(['photoitem' => $itemphoto->filename]);
        return redirect('/item');
    }

    public function showItems()
    {

        return view('item');
    }
}
