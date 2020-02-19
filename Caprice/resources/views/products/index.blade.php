@extends('layouts.employees')
@section('title','Gestion de Productos')
@section('content')

<<<<<<< HEAD
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1>Listado de Productos</h1>
      <div class="container ">
        <div class="row px-3 py-3"></div>
      </div>

           <ul>

    <?php
    foreach($products as $product):?>
         <li><?php echo   $product->nombre ?></li>

    <?php endforeach?>
    </ul>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
=======
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Listado de Productos Registrados</h3>
      <table class="table table-dark letra-negocio-blanca">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->nombre}}</td>
            <td>{{$product->cantidad}}</td>
            <td>{{$product->precio}}</td>
          </tr>
         @endforeach
        </tbody>
      </table>
    
    </div>
  </div>
</div>  


@endsection
>>>>>>> 14821694969f187e43934fb576ca6e6b0b0e5f1b
