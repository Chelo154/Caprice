@extends('layouts.menu')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h3 class=" letra-negocio-blanca text-center">Editar Producto</h3>
    </div>

    <div class="col">
    <form class="form-group" method="POST" action="{{route('products.update',['product'=>$product])}}">
        @csrf
        @method('PUT')
        <div class="form-group" >           
            <label for="">Nombre</label>
          <input type="text" name="nombre"  class="form-control" value="{{$product->nombre}}" >
          <label for="">Cantidad</label>
          <input type="text" name="cantidad" id="" class="form-control" value="{{$product->cantidad}}">
          <label for="">Precio</label>
          <input type="text" name="precio" id="" class="form-control" value="{{$product->precio}}">
          <div class="form-group">
            <label for="">Tipo</label>
            <select multiple class="custom-select" name="tipo" id="">
                  <option selected>{{$product->tipo}}</option>
                  <option value="plato">Plato</option>
                  <option value="bebida">Bebida</option>
              </select>
          </div>

          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection
