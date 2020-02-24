@extends('layouts.menu')
@section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Listado de Comandas Registradas</h3>
      <br>
      <br>

      <table class="table  table-responsive-sm table-dark letra-negocio-blanca">
        <thead>
          <tr>
            <th scope="col">Núerno Comanda</th>
            <th scope="col">Empleado</th>
            <th scope="col">Fecha</th>
            <th scope="col">Numero de Mesa</th>
            <th scope="col">Total</th>
            <th scope="col">Estado</th>
            <th scope="col">Detalle</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        --<tbody>
          @foreach($orders as $order)
          <tr>
            <td>{{$order->id}}</td>
          <td>{{$order->employee->apellidoEmpleado}},{{$order->employee->nombreEmpleado}}</td>
            <td>{{$order->fechaComanda}}</td>
            <td>{{$order->bar->id}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->estadoComanda}}</td>            
            <td>
            <a name="" id="" class="btn btn-warning" href="{{route('order.show',$order)}}" role="button">Detalle Comanda</a>
            </td>
            <td>
            <form action="{{route('order.pagarcomanda',$order)}}" method="POST">
              @csrf
              @method('PUT')
                <button type="submit" class="btn btn-success">Confirmar Pago Comanda</button>
              </form>
            <form action="{{route('order.cancelarcomanda',$order)}}" method="POST">
              @csrf
              @method('PUT')
                <button type="submit" class="btn btn-danger">Cancelar Comanda</button>
              </form>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection


