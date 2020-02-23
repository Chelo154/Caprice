<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bar;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        if(Auth::check()){

            return view('empleados.products.index',['products'=>$products]);
        }else{
            return redirect()->guest('login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            $products = Product::all();
            return view('empleados.products.create');
        }else{
            return redirect()->guest('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
           $product = new Product;
           $product->nombre = $request->input('nombre');
           $product->cantidad = $request->input('cantidad');
           $product->precio = $request->input('precio');
           $product->tipo = $request->input('tipo');
           $product->save();
           $message = 'Producto registrado exitosamente';
           return redirect('/products');
       


      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        if(Auth::check()){            
            return view('empleados.products.show',['product'=>$product]);
        }else{
            return redirect()->guest('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        if(Auth::check())return view('empleados.products.edit',['product'=>$product]);
        else return redirect()->guest('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $product->nombre = $request->nombre;
        $product->cantidad = $request->cantidad;
        $product->precio = $request->precio;
        $product->tipo = $request->tipo;
        $product->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //        
        $product->delete();
    }
}
