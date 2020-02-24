
<!doctype html>
<html lang="en">
  <head>
    <title>Caprice-Empleados</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>

  <div class="d-flex " id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading letra-caprice">Caprice-Empleados </div>
      <hr class="linea-naranja">
      <div class="card bg-dark">
        <img class="card-img-top img-fluid rounded-circle" src="https://i.ibb.co/ZSqZyhJ/Avatar-usuario.png" alt="">
        <div class="card-body">
        <h4 class="card-title letra-negocio-blanca">{{Auth::user()->name}}</h4>
        <p class="card-text letra-negocio-blanca">{{Auth::user()->email}}</p>
        </div>
      </div>
      <div class="list-group list-group-flush ">
        <a href="{{url ('/home')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">Inicio</a>
        <a href="{{url ('/products')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">Gestionar Productos</a>
        <a href="{{url('/bar')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">Gestionar  Mesas</a>
        <a href="{{url('/order')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">Nueva Comanda</a>
        <a href="{{url('')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">Listar Comandas</a>
        <form method="POST" action="{{route('logout')}}" class="list-group-item list-group-item-action bg-dark letra-negocio-blanca">
          <button type="submit" class="btn btn-warning">
            @csrf
            Cerrar Sesion</button>
        </form>
      </div>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
        <button class="btn btn-warning" id="menu-toggle">Ver/Ocultar Menu</button>
      </nav>

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center ">
        <img src= https://i.ibb.co/T4zSm9P/Caprice-Logo.jpg class="img-fluid logo-navbar-principal">
        <a class="navbar-brand letra-caprice-blanca" href="#" style="text-indent: 0.5cm">Gestión Caprice</a>
      </nav>
      <div>
          @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="{!! asset('css/simple-sidebar.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/layoutemployee.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
  </body>
</html>
