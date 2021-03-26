<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use IIlluminate\Support\Facades\Redirect;
use  App\Pays;


class Payscontroller extends Controller
{
    public function create()
    {
        return view('Pays.create');
    }
    public function store(Request $request)
    {
       $pays=new Pays();
       $pays->nom=$request->nom;
       $pays->save();
       return redirect()->route('Pays.index');
    }  
    
    public function index()
    {
        $pays = Pays::all();
        return view('Pays.index',compact('pays'));
    } 
   public function ListePays()
   {
       $pays=Pays::all();
       return view('VuePays',compact('pays'));

   }
   public function Edit($id){
       $pays= Pays::find($id);
       return view ('Pays.Edit',['pays'=> $pays]);

   }
   public function ShowData($id)
   {
     $pays= pays:: find ($id);
     return view ('Edit', ['pays'=> $pays]);
    }

    public function update(Request $request, $id )
   {
     $pays = Pays::find($id);
     $pays->nom=$request->nom;
     $pays->save();
     return redirect()->route('Pays.index');  

   }
   public function destroy($id)
   {
       $pays = Pays::find($id);
       $pays->delete();
       return redirect()->route('Pays.index'); 

   }
}
