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
                          @if (is_null($order->bar))
                      <form method="POST" action="{{route('order.agregarmesa',$order)}}">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                          <h5 class="letra-negocio-blanca"> Mesa Seleccionada</h5>
                          <select class="form-control" id="" name="idmesa">
                            @foreach ($mesas as $mesa)
                              <option>{{$mesa->id}}</option>
                            @endforeach

                          </select>
                          <button type="submit" class="btn btn-warning">Confirmar Mesa  </button>
                        </form>
                          @else
                        <h5 class="letra-negocio-blanca"> Mesa Seleccionada: Mesa Nº {{$order->bar->id}}</h5>
                          @endif

                      </div>

                    </div>
                  </div>
                  <hr class="linea-naranja">
            </div>
            <div class="col-sm-12">
              <h3 class="letra-negocio-blanca">Agregar Producto  a la Comanda</h3>
              @if (!isset($producto))



              <form action="{{route('order.buscarproducto',$order)}}" method="POST">
                @method('PUT')
                @csrf
                 <div class="form-group">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="letra-negocio-blanca" >Codigo de Producto</label>
                      <input type="text"
                        class="form-control" name="idproducto" id="" placeholder="">
                        <button type="submit" class="btn btn-warning">Buscar Producto</button>
                    </div>
                   </div>
                  </form>
                  @endif
                  <div class="col-md-6">
                    @if (isset($producto))
                  <form action="{{route('order.agregarproducto',[$order,$producto])}}" method="POST">
                    @method('PUT')
                    @csrf
                    <h5 class="letra-negocio-blanca">Id del Producto: {{$producto->id}}</h5>
                        <h5 class="letra-negocio-blanca">Nombre del Producto: {{$producto->nombre}}</h5>
                        <h5 class="letra-negocio-blanca">Tipo del Producto: {{$producto->tipo}}</h5>
                        <h5 class="letra-negocio-blanca">Precio Unitario : $ {{$producto->precio}}</h5>
                          <div class="form-group">
                            <h5 class="letra-negocio-blanca">Cantidad del Producto:
                            <input type="text" class="form-control" name="cantidad" id=""  placeholder="">
                          </div>
                          <button type="submit" class="btn btn-warning letra-negocio-blanca">Agregar Producto</button>
                        </form>
                    @endif
                  </div>
                  <hr class="linea-naranja">
             </div>
             <div class="col-sm-12 justify-content-center">
              <h3 class="letra-negocio-blanca">Listado de Productos Agregados</h3>
              <table class="table table-responsive-sm">
                <thead class="letra-negocio-blanca">
                  <tr>
                    <th>Id</th>1º
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Opciones</th>
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
                  <td>
                  <form action="{{route('order.eliminarproducto',[$order,$orderDetail])}}" method="POST">
                    @method('PUT')
                    @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            <h3 class="letra-negocio-blanca text-center">Total a Pagar: ${{$order->total}}</h3>
            <hr class="linea-naranja">
             </div>
             <div class="col-md-6">
             <form action="{{route('order.registrarcomanda',$order)}}" method="POST">
              @csrf
              @method('PUT')
              <button type="submit" class="btn btn-warning">Confirmar Comanda</button>
            </form>
            <br>
            <br>


                 </div>


            </div>
            </div>
          </div>
        </div>



  </div>

</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
@endsection
