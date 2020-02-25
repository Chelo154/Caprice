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
            </nav>
            </div>
            <!-- Inicio del contenido-->
            <h2 class="letra-caprice-blanca mt-3">¿Quienés somos?</h2>
            <hr class="linea-naranja">
            <div class="col-sm-12">
                <h4 class="letra-info-blanca">
                    Somos unos apasionados por la cerveza y la comida de calidad.Nuestro bar es un excelente espacio para disfrutar de la compañia de amigos, familiares o en pareja.
                    Con un estilo inconfundible , por la calidad de los productos y la dedicada atención a nuestros clientes
                </h4>
            </div>
    </div>
    <div class="container">
        <img src="../imagenes/somos_caprice.jpg" alt="Mapa Ubicación Caprice" class="img-fluid" >
    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">

@endsection
