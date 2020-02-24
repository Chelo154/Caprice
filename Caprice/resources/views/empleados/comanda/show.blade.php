@extends("layouts.menu")
  @section('content')
<div class="container" >
  <div class="row">
    <div class="col">
      <h2 class="text-center letra-negocio-blanca">Nueva Comanda</h2>
    </div>
  </div>
</div>
<div class="container bg-dark "  >
    <div class="row">
      <div class="col" class="text center">
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center ">
          <img src= https://i.ibb.co/T4zSm9P/Caprice-Logo.jpg class="img-fluid logo-navbar-principal" width="100" height="100">
        </nav>
        <h4 class="text-center letra-info-blanca">Chacabuco 437-San Miguel de Tucumán</h4><br>
        <h4 class="text-center letra-info-blanca">Teléfono:4364577</h4>
      </div>
      </div>
      <hr class="linea-naranja">
      <div class="card fondo-base-1">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="letra-negocio-blanca"> Datos de la Comanda</h3>
                  <br>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <h5 class="letra-negocio-blanca"> Numero de Comanda : {{$order->id}}
                      </div>
                      <div class="col-md-6">
                        <h5 class="letra-negocio-blanca"> Fecha de Comanda : {{$order->fechaComanda}}
                      </div>                      
                      <div class="col-md-6">                        
                        <h5 class="letra-negocio-blanca"> Empleado: {{$order->employee->apellidoEmpleado}},{{$order->employee->nombreEmpleado}}
                      </div>                      
                      <div class="col-md-6">
                        <h5 class="letra-negocio-blanca"> Mesa Seleccionada: Mesa Nº {{$order->bar->id}}</h5>
                      </div>
                    </div>
                  </div>
                  <hr class="linea-naranja">
            </div>
            <div class="col-sm-12">              
             <div class="col-sm-12 justify-content-center">
              <h3 class="letra-negocio-blanca">Listado de Productos</h3>
              <table class="table table-responsive-sm">
                <thead class="letra-negocio-blanca">
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody class="letra-negocio-blanca">
                  @foreach ($order->orderDetails as $orderDetail)
                  <tr>
                  <td scope="row">{{$orderDetail->product->id}}</td>
                  <td>{{$orderDetail->product->nombre}}</td>
                  <td>{{$orderDetail->cantidad}}</td>
                  <td>{{$orderDetail->product->precio}}</td>
                  <td>{{$orderDetail->subtotal}}</td>
                 
                  </tr>
                  @endforeach

                </tbody>
              </table>
            <h3 class="letra-negocio-blanca text-center">Total a Pagar: ${{$order->total}}</h3>
            <hr class="linea-naranja">
             </div>          


                 </div>


            </div>
            </div>
          </div>
          <br>
          <br>
          <br>
        <a href="{{route('order.listarcomandas')}}" class="btn btn-warning letra-negocio-negra">Atrás</a> 
            <br>
          <br>
          <br> 
        </div>
      
        



  </div>


</div>

<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
@endsection
