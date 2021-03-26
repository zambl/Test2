<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\recettes;
use  App\ingredients;
use  App\Menus;

class RecettesController extends Controller
{
    public function create()
    {      
        $menus=Menus::all();
        return view('Recettes.create',compact('menus'));
    }
    public function index()
    {
        //
    }
    
    public function store(Request $request)
    {    
        $validatedData = $request->validate([
            'nom' => ['required', 'max:255'],
            'description' => ['required','string', 'max:2000'],
            'tempscuisson' => ['required'],
            'quantitéingredient' => ['required'],
            ]);
        $recettes=new Recettes();
        $recettes->menus_id=$request->menus;
        $recettes->ingredients_id=$request->ingredients;
        $recettes->nom=$request->nom;
        $recettes->description=$request->description;
        $recettes->tempscuisson=$request->tempscuisson;
        $recettes->quantitéingredient=$request->quantitéingredient;
        $recettes>save();
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

   
    public function destroy($id)
    {
        //
    }
}
