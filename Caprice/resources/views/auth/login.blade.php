@extends('layouts.app')



@section('content')

<div class="container fondo-base-1 " >
    <div class="row justify-content-center">
        <div class="col-md-8 ">
                <h4 class="letra-info-blanca">¡Entra a tu Cuenta!</h4>
        </div>
    </div>
    <div class="row justify-content-center">
             <form method="POST" action="{{ route('login') }}">
                 @csrf
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                <h4 class="letra-info-blanca">Dirección de Correo</h4>
                            </label>
                    <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>
    </div>

         <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">
                    <h4 class="letra-info-blanca">Contraseña</h4>
                </label>

            <div class="col-md-6">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                       @enderror
           </div>
         </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        <h4 class="letra-info-blanca">Recordar Contraseña</h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    <h4 class="letra-info-blanca">Entrar</h4>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        <h4 class="letra-info-blanca">Olviste tu Contraseña?</h4>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<link href="{!! asset('css/estilosbase.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fonts.css') !!}" rel="stylesheet">
@endsection
