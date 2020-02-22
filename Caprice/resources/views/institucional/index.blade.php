@extends('layouts.default')

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
            <div class="col-md-6"><!--Intro Presentación-->
                <h2 class="letra-caprice-blanca">¡Bienvenido a Caprice! </h2>
                <hr class="linea-naranja"/>
            </div><!--/Intro Presentacion-->
            <div justify-content-center class="col-sm-12">
                <h4 class="letra-info-blanca"  class="fa fa-align-center"  >
                    Caprice, es un bar nuevo ubicado en Barrio Sur de San Miguel de Tucumán. especificamente en Chacabuco 437.<br>
                    Vení y disfruta todos los días de la semana con buenas promos y  nuestro happy hour en pintas y comida de calidad!
                    Te esperamos para que pases un agradeble momento o celebres tu cumple con amigos , familia , pareja!
                </h4>
            </div>
            <div class="col-md-6"><!--Intro Carousel-->
                <h2 class="letra-caprice-blanca "> Para vos</h2>
                <hr class="linea-naranja"/>
            </div><!--/Intro Carousel-->
            <div class="col-md-12"><!--ColumnaCarousel -->
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                        <li data-target="#carouselId" data-slide-to="3"></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="https://i.ibb.co/qMZ3WTC/Carousel-Caprice1.jpg" alt="First slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/T28XtbV/Carousel-Caprice2.jpg" alt="Second slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/kqzG3TY/Carousel-Caprice3.jpg" alt="Third slide" class="img-fluid imagen-carousel-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/vXLTDvL/Carousel-Caprice4.jpg" alt="Fourth slide" class="img-fluid imagen-carousel-1">


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
        </div><!--/ColumnaCarousel -->

        <div class="container">
            <h2 class="letra-caprice-blanca">Ubicación de Caprice</h2>
                    <hr class="linea-naranja"/>
            <div class="row">
                <div class="col-md-6">

<<<<<<< HEAD
        <div class="col-md-6">
            <h3 class="letra-caprice-blanca">Ubicación de Caprice</h3>
            <hr class="linea-naranja"/>
            <div class="col-sm-12 justify-content-center" >
                <img src="../imagenes/mapa.jpg" alt="Mapa Ubicación Caprice" with="300" height="350" class="img-fluid justify-content-center">
=======
                        <img src="../imagenes/mapa2.png" alt="Mapa Ubicación Caprice" class="img-fluid "style='align:center;text-align:center'>
                </div>
                <div class= "col-md-6">
                    <h3 class="letra-caprice"  class="text-center">Encuentranos en</h3>
                    <h4 class="letra-info-blanca" class="text-center">  Chacabuco 437- San Miguel de Tucumán </h4>
                </div>
>>>>>>> d231964d33b3e7e2f1567223299fb375b269215c
            </div>
        </div>
        <!--/Contenido de la Pagina-->
    </div>
</div>
<footer class="border-top">
<div class="container">
    <div class=row>
        <div class="col-md-6">
            <h5 class="letra-info-blanca">Para ingresar a la Gestión de Caprice ,presione el botón</h5>
        </div>
        <div class="col-md-6">
            <a href={{url("/login")}}><input type="button" value="LOGIN"></a>
        </div>
    </div>
</div>
    <h6 class="text-center"><i class="fa fa-copyright" aria-hidden="true">Copyright® todos los derechos reservados</i></h6>
</footer>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">

@endsection
