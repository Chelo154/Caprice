@extends("layouts.menu")
@section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h3 class="text-center letra-negocio-blanca">Nueva Comanda</h3>
    </div>
  </div>
</div>
<div class="card bg-dark" >
    <div class=row>
      <div class="col" class="text center">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center ">
          <img src= https://i.ibb.co/T4zSm9P/Caprice-Logo.jpg class="img-fluid logo-navbar-principal" width="100" height="100">
        </nav>
        <h4 class="text-center letra-info-blanca">Chacabuco 437-San Miguel de Tucumán</h4><br>
        <h4 class="text-center letra-info-blanca">Teléfono:4364577</h4>
      </div>
      </div>
      <div class="card bg-secondary">
        <form action="{{route('')}}" method="POST">
          @csrf
           <div class="form-group">
             <label for="">Nombre Producto</label>
             <textarea class="form-control" name="nombre producto" id="" rows="1"></textarea>
           </div>
           <button type="submit" class="btn btn-primary letra-negocio-blanca">Buscar</button>
      </form>
      </div>


  </div>

</div>
