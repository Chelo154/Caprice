@extends('layouts.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="letra-negocio-blanca text-center"> Completar Datos Empleado</h3>
                <hr>
            </div>
            <div class="col">
            <form class="form-group" method="POST" action="/employees">
                @csrf
                <div class="form-group">
                  <label for="">Dni</label>
                  <input type="text" name="dni" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <label for="">Nombre</label>
                  <input type="text" name="nombreEmpleado" id="" class="form-control" placeholder="" aria-describedby="helpId"> 
                  <label for="">Apellido</label>
                  <input type="text" name="apellidoEmpleado" id="" class="form-control" placeholder="" aria-describedby="helpId"> 
                  <label for="">Telefono</label>
                  <input type="text" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <label for="">Domicilio</label>
                  <input type="text" name="domicilio" id="" class="form-control" placeholder="" aria-describedby="helpId">                
                </div>
                <button type="submit" class="btn btn-primary">Completar Datos</button>
            </form>
            </div>
        </div>
    </div>
@endsection