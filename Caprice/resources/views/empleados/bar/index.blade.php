@extends('layouts.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="letra-negocio-blanca text-center">Gestionar Mesas</h2>
                <button type="button" class="btn btn-primary ">
                <a href="{{route('bar.create')}}" class="letra-negocio-blanca">Agregar Mesa</a>
                </button>
                <br>
                <br>
            </div>
            
            @foreach ($mesas as $mesa)            
               
            <div class="col-md-3">
                <div class="card bg-dark">
                    @if ($mesa->estado =='libre')                   
                        <span class="iconify text-center" data-icon="medical-icon:restaurant" data-inline="false" style="color: green;" data-width="150" data-height="150"></span>    
                    @else
                    <span class="iconify" data-icon="medical-icon:restaurant" data-inline="false" style="color: red;" data-width="150" data-height="150"></span>    
                    @endif
                    <div class="card-body">
                    <h4 class="card-title letra-negocio-blanca">Mesa {{$mesa->id}}</h4>
                    <p class="card-text letra-negocio-blanca">Estado: {{$mesa->estado}}</p>
                    @if ($mesa->estado == 'libre')
                    <form action="{{route('bar.update',$mesa)}}" method="POST">
                       @method('PUT')
                       @csrf
                       <input type="hidden" name="estado" value="ocupado">
                       <button type="submit" class="btn btn-danger letra-negocio-blanca">Ocupar Mesa</button>
                    </form>
                    @else
                    <form action="{{route('bar.update',$mesa)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="estado" value="libre">
                        <button type="submit" class="btn btn-success letra-negocio-blanca">Liberar Mesa</button>
                     </form>   
                    @endif
                    </div>
                </div>
            </div>
               
            @endforeach
        </div>
    </div>
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
@endsection