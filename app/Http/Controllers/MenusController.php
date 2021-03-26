<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Menus; 
use  App\Pays;

class MenusController extends Controller
{
    public function create()
    { 
        $pays=Pays::all();
       return view('Menus.create', compact('pays'));
    }
    public function index()
    {
           $menus=Menus::all();
           return view('Menus.index',compact('menus'));
        }

    public function store(Request $request)
    { 
        $validatedData = $request->validate([
        'nom' => ['required', 'max:255'],
        'description' => ['required','string', 'max:2000'],
        'image' => ['required'],
        'tempspreparation' => ['required'],
        ]);
       // dd($request);  
        $menus=new Menus();
        $menus->pays_id=$request->pays;
        $menus->nom=$request->nom;
        $menus->description=$request->description;
        $menus->photo=$request->image;
        $menus->tempspreparation=$request->tempspreparation;
        $menus->save();
        return redirect()->route('Menus.index');  
    }
    public function Edit($id){
        $menus= Menus::find($id);
        return view ('Menus.Edit',['menus'=> $menus]);
    }
    public function ShowData($id)
   {
     $menus= Menus::find ($id);
     return view ('Edit', ['menus'=> $menus]);
    }
    public function update(Request $request, $id )
    {
      $menus = menus::find($id);
      $menus->nom=$request->nom;
      $menus->description=$request->description;
      $menus->photo=$request->image;
      $menus->tempspreparation=$request->tempspreparation;
      $menus->save();
      return redirect()->route('Menus.index');  
 
    }
    
   public function destroy($id)
   {
       $menus = Menus::find($id);
       $menus->delete();
       return redirect()->route('Menus.index'); 

   }
 }

    