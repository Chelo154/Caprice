<?php

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
    return view('institucional.index');
});


/* Rutas de Main Controller */
Route::get('inicio','MainController@index');
Route::get('foodandbeer','MainController@foodAndBeer');
Route::get('nosotros','MainController@nosotros');
Route::get('contactanos','MainController@contactos');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'products'=>'ProductsController'
]);
