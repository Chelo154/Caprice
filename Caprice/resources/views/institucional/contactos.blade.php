@extends('layouts.default')

@section('title','Food and Beer')


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
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active " href="{{url('/inicio')}}">
                                    <h4 class="letra-caprice text center">Inicio</h4>
                            <a class="nav-item nav-link" href="{{url('/nosotros')}}">
                                    <h4 class="letra-caprice text center">Quienes Somos</h4>
                            </a>
                        <a class="nav-item nav-link" href="{{url('/foodandbeer')}}">
                                <h4 class="letra-caprice text center">Food and Beer</h4>
                            </a>
                        <a class="nav-item nav-link" href="{{url('/contactanos')}}">
                                <h4 class="letra-caprice text center">Contáctanos</h4>
                        </a>
                        </div>
                </div>
            </nav>
            </div>
            <!-- Inicio del contenido-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="letra-caprice text-center">¿Deseas Contactarnos?</h1>
                        <hr class="linea-gris">
                    </div>
                    <div class="col-sm-12">
                        <h3 class="letra-caprice-blanca">Puedes contactarnos fácilmete por cualquiera de nuestras redes sociales</h3>
                    </div>
                    <div class="col-sm-12">
                        <div class="list-group">
                            <a href="https://www.instagram.com/caprice.bartuc/" class="list-group-item list-group-item-dark ">
                                <h4 class="letra-caprice-negra">
                                    <span class="iconify" data-icon="fa:instagram" data-inline="false" style="color: orange;"></span>
                                    Instagram: @capricebartuc
                                </h4>
                            </a>
                            <a href="https://www.facebook.com/capricetucuman/" class="list-group-item list-group-item-dark ">
                                <h4 class="letra-caprice-negra">
                                    <span class="iconify" data-icon="fa:facebook-square" data-inline="false" style="color: orange;"></span>
                                    Facebook: https://www.facebook.com/capricetucuman/
                                </h4>
                            </a>
                          </div>
                          <hr class="linea-naranja"/>
                    </div>

                </div>
                <h3 class="letra-caprice-blanca text-center"> Te esperamos!!</h3>
            </div>

    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">
<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
@endsection
