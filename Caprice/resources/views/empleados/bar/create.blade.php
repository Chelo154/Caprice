@extends('layouts.menu')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="letra-negocio-blanca text-center">Agregar nueva mesa</h2>
            <hr class="linea-naranja">
        </div>
        <div class="col">
        <form action="{{route('bar.store')}}" method="POST">
            @csrf
             <div class="form-group">
               <label for="">Descripcion de la mesa</label>
               <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
             </div>
             <button type="submit" class="btn btn-primary letra-negocio-blanca">Agregar Mesa</button>
        </form>
        </div>
    </div>
</div>
    
@endsection