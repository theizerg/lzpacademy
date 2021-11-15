@extends('layouts.adminfront')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-group">
                    <div class="card card-primary p-4">
                        
                        <div class="card-body">
                             <form method="POST" action="{{ route('login') }}">
                        @csrf
                             <h1 class="black-text">Iniciar Sesión</h1><!-- <p class="text-muted">ADMIN<br>
                            Email : admin@macbrame.com<br> Pass : macbrame</p> -->
                        <p class="text-muted">Ingresa tu usuario y contraseña</p>
                            <p class="text-muted"></p>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                         <i class="mdi mdi-face"></i>
                                    </span>
                                </div>
                                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" placeholder="Usuario" id="email"   autofocus autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <i class="mdi mdi-lock"></i>
                                    </span>
                                </div>
                                <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  autocomplete="off" placeholder="Contraseña">
                                  <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn blue darken-4 btn-md" id="boton">
                                        <i class="fas fa-sign-in-alt text-white" id="ajax-icon"></i> <span class="text-white ">{{ __('Iniciar Sesión') }}</span>
                                    </button>       
                                </div>
                              
                            </div>
                        </div>
                    </form>                    </div>
                    <div class="card card card-primary p-4 text-white py-5 d-md-down-none" style="width:44%;background:#FFFFFF !important">
                        <div class="card-body text-center">
                            <div><br>
                                <img src="{{asset('images/logo/logo_principal.jpg')}}" style="width:100%"><br><br>
                                <span class="text-center text-muted"  style="color: #191919 !important">Bienvenidos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
