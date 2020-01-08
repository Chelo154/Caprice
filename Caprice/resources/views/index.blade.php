@extends('Layouts.default')

@section('title','Un Lugar de Amigos')


@section('content')
<div class="container fondo-base-1" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >
                <img src="https://i.ibb.co/T4zSm9P/Caprice-Logo.jpg" class="img-fluid logo-caprice-1 " alt="">
            </div>
            <div class="col-sm-12">
                <h3 class="text-center letra-caprice"> Un Lugar de amigos</h3>
                <hr class="linea-gris"/>
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
        <div class="col-md-6"><!--Intro Presentación-->
            <h2 class="letra-caprice-blanca">Bienvenido a Caprice </h2>
            <hr class="linea-naranja"/>            
        </div><!--/Intro Presentacion-->
        <div class="col-sm-12">
            <h4 class="letra-info-blanca">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cupiditate nobis, libero quis molestias a neque quaerat tempore incidunt saepe assumenda enim beatae in sequi totam, adipisci repellat nihil harum omnis ratione soluta fugit! Nulla eos perferendis error modi unde voluptates debitis. Nulla id laudantium ducimus magni excepturi, numquam eveniet culpa, placeat perspiciatis et natus ut, animi atque repellendus voluptas expedita facere. Soluta, minus? Perferendis voluptatum cumque corporis cum sapiente iusto velit natus, voluptates ipsam dolorum, non dolorem sunt optio architecto consequatur commodi iste dolores! Modi esse dolorum autem quasi.   
            </h4>
        </div> 
    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">
    
@endsection
