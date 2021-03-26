<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\typeingredients; 


class TypeingredientsController extends Controller
{
    public function create()
    {
        return view('Typeingredients.create');
    }

    
    public function store(Request $request)
    {     
        
           $typeingredients=new Typeingredients();
           $typeingredients->nom=$request->nom;
           $typeingredients->save();
           return redirect()->route('Typeingredients.index');
    }
    public function index()
    {
         $typeingredients = Typeingredients::all();
        return view('Typeingredients.index',compact('typeingredients'));
    }

    public function Edit($id){
        $typeingredients= Typeingredients::find($id);
        return view ('Typeingredients.Edit',['typeingredients'=> $typeingredients]);
 
    }
    public function update(Request $request, $id)
    {
        $Typeingredients = Typeingredients::find($id);
        $Typeingredients->nom=$request->nom;
        $Typeingredients->save();
        return redirect()->route('Typeingredients.index');
    }

    
    public function destroy($id)
    {
        $typeingredients = Typeingredients::find($id);
        $typeingredients->delete();
        return redirect()->route('Typeingredients.index'); 
 
    }
}
