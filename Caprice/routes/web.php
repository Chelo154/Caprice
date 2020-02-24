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
Route::get('/order/listar','OrderController@listar')->name('order.listarcomandas');
Route::resources([
    'products'=>'ProductsController',
    'employees'=>'EmployeesController',
    'bar'=>'BarController',
    'order'=>'OrderController'
    ]);
Route::put('/order/{order}','OrderController@agregarMesa')->name('order.agregarmesa');
Route::put('/order/buscar/{order}','OrderController@buscarProducto')->name('order.buscarproducto');
Route::put('/order/agregar/{order}/{producto}','OrderController@agregarProducto')->name('order.agregarproducto');
Route::put('/order/eliminar/{order}/{orderDetail}','OrderController@eliminarProducto')->name('order.eliminarproducto');
Route::put('/order/registar/{order}','OrderController@registrarComanda')->name('order.registrarcomanda');
Route::put('/order/pagar/{order}','OrderController@pagarComanda')->name('order.pagarcomanda');
Route::put('/order/cancelar/{order}','OrderController@cancelarComanda')->name('order.cancelarcomanda');



