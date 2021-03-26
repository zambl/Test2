<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\typeingredients; 
use  App\ingredients;




class IngredientsController extends Controller
{
    public function create()
    { 
        $ingredients=Ingredients::all();
       return view('Ingredients.create',compact('typeingredients'));
    }

    public function store(Request $request)
    { 
        $validatedData = $request->validate([
        'nom' => ['required'],
        'description' => ['required','string'],
        ]); 
        $ingredients=new ingredients();
        $ingredients->typeingredients_id=$request->typeingredients;
        $ingredients->nom=$request->nom;
        $ingredients->description=$request->description;
        $ingredients->save();
        return redirect()->route('Ingredients.index'); 
    }
    public function index()
    {
           $ingredients= Ingredients::all();
           return view('Ingredients.index',compact('ingredients'));
        }
        public function Edit($id){
            $ingredients= Ingredients::find($id);
            return view ('Ingredients.Edit',['ingredients'=> $ingredients]);
        }
        public function update(Request $request, $id )
    {
      $ingredients= Ingredients::find($id);
      $ingredients->nom=$request->nom;
      $ingredients->description=$request->description;
      $ingredients->save();
      return redirect()->route('Ingredients.index');  
 
    }
    
}
