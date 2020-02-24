@extends('layouts.menu')

@section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Listado de Productos Registrados</h3>
      <br>
      <br>

    <button type="button" class="btn btn-success">
    <a href="{{route('products.create')}}" class="letra-negocio-blanca">
      Agregar Nuevo Producto
    </a>
  </button>
      <br>
      <br>
      <table class="table  table-responsive-sm table-dark letra-negocio-blanca ">
        <thead>
          <tr>
            <th scope="col ">Id</th>
            <th scope="col ">Nombre</th>
            <th scope="col ">Cantidad</th>
            <th scope="col ">Precio</th>
            <th scope="col ">Tipo</th>
            <th scope="col ">Editar</th>
            <th scope="col ">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td >{{$product->id}}</td>
            <td>{{$product->nombre}}</td>
            <td>{{$product->cantidad}}</td>
            <td>{{$product->precio}}</td>
            <td>{{$product->tipo}}</td>
            <td>
            <a name="" id="" class="btn btn-primary" href="{{route('products.edit',$product)}}" role="button">Editar Producto</a>
            </td>
            <td>
            <a name="" id="" class="btn btn-danger" href="{{route('products.show',$product)}}" role="button">Elminar Producto</a>
              </td>
          </tr>
         @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>





@endsection
