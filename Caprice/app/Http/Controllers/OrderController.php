<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Bar;
use App\Product;
use App\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mesas = Bar::where('estado','ocupado')->get();
        $estado = 'comanda';
        $total = 0;
        $order = new Order;
        $order->fechaComanda = Carbon::now();
        $order->total = $total;
        $order->estadoComanda = $estado;
        $order->save();
        if(Auth::check()){
            return view('empleados.comanda.index',['order'=>$order,'mesas'=>$mesas]);
        }
        else return redirect()->guest('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }
    public function agregarMesa(Request $request,Order $order){
        
        $mesa = Bar::find($request->idmesa);
        $order->bar()->associate($mesa);
        $order->save();
        $mesa->orders()->save($order);
        $mesa->save();
        return view('empleados.comanda.index',['order'=>$order]);
    }
     public function buscarProducto(Request $request,Order $order){
         $producto= Product::find($request->idproducto);
         return view('empleados.comanda.index',['order'=>$order,'producto'=>$producto]);
     }
     public function agregarProducto(Request $request,Order $order,Product $producto){
         
        /*Creacion de Linea de Venta*/ 
        $subtotal =0;
        $detalle = new OrderDetail;  
        $detalle->cantidad = $request->cantidad;
        $detalle->subtotal = $subtotal;        
        $detalle->save();
        $detalle->product()->associate($producto)->save();
        $detalle->order()->associate($order)->save();
        $producto->orderDetails()->save($detalle);
        /*Agregacion a la comanda*/
        $order->orderDetails()->save($detalle);
        $order->calcularTotal();
        $order->save();        
        return view('empleados.comanda.index',['order'=>$order]);
     }
     public function eliminarProducto(Request $request, Order $order, OrderDetail $orderDetail){
        $orderDetail->delete();   
        $order->calcularTotal();     
        return  view('empleados.comanda.index',['order'=>$order]);
        
     }
     public function registrarComanda(Request $request, Order $order){
         $order->save();
         return redirect('/home');
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
