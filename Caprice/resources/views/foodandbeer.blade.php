@extends('Layouts.default')

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
            <h1 class="letra-caprice">Food and Beer</h1>
            <div class="col-md-12"><!--ColumnaCarousel -->
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                        <li data-target="#carouselId" data-slide-to="3"></li>
                        <li data-target="#carouselId" data-slide-to="4"></li>
                    </ol>

                    <h2 class="letra-caprice">Cervezas</h2>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="https://scontent.ftuc1-1.fna.fbcdn.net/v/t1.0-9/s960x960/47491955_286955521934476_795235176497020928_o.jpg?_nc_cat=107&_nc_ohc=L4hXcplCb44AX_UNZg7&_nc_ht=scontent.ftuc1-1.fna&_nc_tp=7&oh=ac4f9dbb80d29489bf219deced02fe76&oe=5EBE56B7" alt="First slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.ftuc1-2.fna.fbcdn.net/v/t1.0-9/43879857_268561223773906_7919905507547021312_n.jpg?_nc_cat=102&_nc_ohc=OCOTyvsisxgAX--Wb0Q&_nc_ht=scontent.ftuc1-2.fna&oh=256cae79edcd9289ab7a51f54d812a59&oe=5EC3B010" alt="Second slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.ftuc1-1.fna.fbcdn.net/v/t1.0-9/32294430_186938628602833_5765192244176879616_n.jpg?_nc_cat=100&_nc_ohc=Wyy6tiIh5bkAX_6Xdyo&_nc_ht=scontent.ftuc1-1.fna&oh=b33ecd8e8ac64052b67feb22fbb182ad&oe=5EB51329" alt="Third slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.ftuc1-1.fna.fbcdn.net/v/t1.0-9/s960x960/30706504_180481939248502_2342042475348099072_o.jpg?_nc_cat=107&_nc_ohc=_ov80hBpBsUAX_bqqPZ&_nc_ht=scontent.ftuc1-1.fna&_nc_tp=7&oh=d1f3e6096cc10383a09c3332606af76f&oe=5EF8EFC6" alt="Fourth slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://scontent.ftuc1-2.fna.fbcdn.net/v/t1.0-9/s960x960/44125423_269018720394823_1005342111874154496_o.jpg?_nc_cat=103&_nc_ohc=R4S82i9hYB8AX_mt-U-&_nc_ht=scontent.ftuc1-2.fna&_nc_tp=7&oh=8b9b490a8b3616001e36030a753e8bf0&oe=5F035C65" alt="Fifth slide" class="img-fluid imagen-carousel-1">
                         </div>

                </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>

    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">

@endsection
