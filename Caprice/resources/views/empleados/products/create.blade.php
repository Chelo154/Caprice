@extends('layouts.menu')
@section('content')
<div class="container">
    @if (isset($message))
        <script>alert('{{$message}}')</script>
    @endif
        
   
    <div class="row">
        <div class="col-sm-12">
            <h3 class=" letra-negocio-blanca text-center">Agregar Producto</h3>
        </div>
        
        <div class="col">
            <form class="form-group" method="POST" action="/products">
                @csrf
            <div class="form-group" >
                <input type="hidden" name="id" value="">
              <label for="">Nombre</label>
              <input type="text" name="nombre"  class="form-control" >              
              <label for="">Cantidad</label>
              <input type="text" name="cantidad" id="" class="form-control">              
              <label for="">Precio</label>
              <input type="text" name="precio" id="" class="form-control">
              <div class="form-group">
                <label for="">Tipo</label>
                <select multiple class="custom-select" name="tipo" id="">
                      <option selected>Seleccionar una opcion</option>
                      <option value="plato">Plato</option>
                      <option value="bebida">Bebida</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection