@extends('Layouts.default')

@section('title','Un Lugar de Amigos')


@section('content')

 

<div class="container fondo-base-1" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr class="linea-gris">             
            <div class="col-sm-12" >
                <img src="https://i.ibb.co/T4zSm9P/Caprice-Logo.jpg" class="img-fluid logo-caprice-1 " alt="">
            </div>
            <div class="col-sm-12">
                <h3 class="text-center letra-caprice"> Un Lugar de amigos</h3>
                <hr class="linea-gris"/>
            </div>
            <div class="col-sm-12">
            <nav class="navbar navbar-expand navbar-dark bg-dark justify-content-center ">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active " href="#">                        
                            <h4 class="letra-caprice text center">Inicio</h4>                         
                    <a class="nav-item nav-link" href="#">                        
                            <h4 class="letra-caprice text center">Quienes Somos</h4>                                                
                    </a>
                <a class="nav-item nav-link" href="#">
                        <h4 class="letra-caprice text center">Food and Beer</h4>                        
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <h4 class="letra-caprice text center">Contáctanos</h4>                       
                    </a>
                </div>
            </nav>    
            </div>
            <!-- Inicio del contenido-->
            <h1 class="letra-caprice">hola mundo</h1>
    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">
    
@endsection
