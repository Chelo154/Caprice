@extends('layouts.menu')

@section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Listado de Productos Registrados</h3>
      <table class="table table-dark letra-negocio-blanca">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->nombre}}</td>
            <td>{{$product->cantidad}}</td>
            <td>{{$product->precio}}</td>
          </tr>
         @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>




    
@endsection