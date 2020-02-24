@extends('layouts.menu')
@section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Listado de Comandas Registradas</h3>
      <br>
      <br>

      <table class="table  table-responsive table-dark letra-negocio-blanca">
        <thead>
          <tr>
            <th scope="col">Núerno Comanda</th>
            <th scope="col">Empleado</th>
            <th scope="col">Fecha</th>
            <th scope="col">Numero de Mesa</th>
            <th scope="col">Total</th>
            <th scope="col">Estado</th>
            <th scope="col">Detalle</th>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $order)
          <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->}}</td>
            <td>{{$order->fechaComanda}}</td>
            <td>{{$order->}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->estadoComanda}}</td>
            <td>
            <a name="" id="" class="btn btn-warning" href="{{route('')}}" role="button">Detalle Comanda></a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>



