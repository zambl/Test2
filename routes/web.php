<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Payscontroller;
use App\Http\Controllers\Photocontroller;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\TypeingredientsController;
use App\Http\Controllers\RecettesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/master');
});
Route::get('/AddMenus', function () {
    return view('AddMenus');
});
Auth::routes();
Route::get('/create/pays',[Payscontroller::class,'create'])->name('create.Pays');
Route::post('/store/pays',[Payscontroller::class,'store'])->name('store.pays');
Route::get('Pays.index', 'Payscontroller@index')->name('Pays.index');
Route::get('Edit/Pays/{id}','Payscontroller@Edit')->name('Pays.Edit');
Route::PUT('Modifier/Pays/{id}','Payscontroller@update')->name('Modifier.Pays');
Route::get('delete/Pays/{id}','Payscontroller@destroy')->name('Delete.Pays');
Route::get('/create/Menus',[MenusController::class,'create'])->name('create.menus');
Route::POST('/store/menus',[MenusController::class,'store'])->name('store.menus');
Route::get('Menus.index', 'MenusController@index')->name('Menus.index');
Route::get('Edit/Menus/{id}','MenusController@Edit')->name('Menus.Edit');
Route::PUT('Modifier/Menus/{id}','MenusController@update')->name('Modifier.Menus');
Route::get('delete/Menus/{id}','MenusController@destroy')->name('Delete.Menus');
Route::get('/create/Typeingredients',[TypeingredientsController::class,'create']);;
Route::post('/store/Typeingredients',[TypeingredientsController::class,'store'])->name('store.typeingredients');
Route::get('Typeingredients.index', 'TypeingredientsController@index')->name('Typeingredients.index');
Route::get('Edit/Typeingredients/{id}','TypeingredientsController@Edit')->name('Typeingredients.Edit');
Route::PUT('Modifier/Typeingredients/{id}','TypeingredientsController@update')->name('Modifier.Typeingredients');
Route::get('delete/Typeingredients/{id}','TypeingredientsController@destroy')->name('Delete.Typeingredients');
Route::get('/create/ingredients',[IngredientsController::class,'create'])->name('create.ingredients');;
Route::post('/store/ingredients',[IngredientsController::class,'store'])->name('store.ingredients');
Route::get('Ingredients.index', 'IngredientsController@index')->name('Ingredients.index');
Route::get('Edit/Ingredients/{id}','IngredientsController@Edit')->name('Ingredients.Edit');
Route::PUT('Modifier/Ingredients/{id}','IngredientsController@update')->name('Modifier.Ingredients');
Route::get('delete/Ingredients/{id}','IngredientsController@destroy')->name('Delete.Ingredients');
Route::get('/create/Photo','PhotoController@create')->name('photo.create');
Route::post('/store/Photo','PhotoController@store')->name('Photo.store');
Route::get('Photo.index', 'PhotoController@index')->name('Photos.index');
Route::get('Edit/Photo/{id}','PhotoController@Edit')->name('Photo.Edit');
Route::PUT('Modifier/Photo/{id}','PhotoController@update')->name('Modifier.Photo');
Route::get('delete/Photo/{id}','PhotoController@destroy')->name('Delete.Photo');
Route::get('/create/recettes',[RecettesController::class,'create'])->name('create.recettes');;
Route::post('/store/recettes',[RecettesController::class,'store'])->name('store.recettes');
Route::get('Recettes.index', 'RecettesController@index')->name('Recettes.index');
Route::get('Edit/Recettes/{id}','RecettesController@Edit')->name('Recettes.Edit');
Route::PUT('Modifier/Recettes/{id}','RecettesController@update')->name('Modifier.Recettes');
Route::get('delete/Recettes/{id}','RecettesController@destroy')->name('Delete.Recettes');
Route::resource('category','CategoryController')->name('*' ,'category');
Route::PUT('Modifier/category/{id}','CategoryController@update')->name('Modifier.category');
Route::get('delete/category/{id}','CategoryController@destroy')->name('Delete.category');


