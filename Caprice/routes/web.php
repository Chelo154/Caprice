<?php

 /* Route ::get( '/', function () {
    return view('institucional.index');
});*/


/* Rutas de Main Controller */
Route::get('/','MainController@index');
Route::get('inicio','MainController@index');
Route::get('foodandbeer','MainController@foodAndBeer');
Route::get('nosotros','MainController@nosotros');
Route::get('contactanos','MainController@contactos');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'products'=>'ProductsController',
    'employees'=>'EmployeesController',
    'bar'=>'BarController'
    ]);
