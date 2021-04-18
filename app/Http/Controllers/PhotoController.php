<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;
use App\Photo;
use uploads\photos;

class PhotoController extends Controller
{
    public function create()

    {
        $menus=Menus::all();
        return view('Photo.create',compact('menus'));
    }

    public function store(Request $request )
    {
        $photo = new Photo();

       $photo->menus_id = $request->menus;
       if($request->hasFile('image')){        
        $photo->image = $request->file('image')->store('uploads/photos');
      }
       $photo->save();
       return redirect()->route('photo.create');  
    }
    public function index()
    {
        $photos = Photo::all();
        return view('Photo.index',compact('photos'));
    }
   
 }
 