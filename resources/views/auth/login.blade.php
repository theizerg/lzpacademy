@extends('layouts.adminfront')
@section('title','LOGIN')
@section('content')
<div class="container-fluid p-0">
     <div class="row no-gutters justify-content-center">
        <div class="col-sm-6 align-self-center order-2 order-sm-1">
                <form id="main-form" class="">
                <input type="hidden" id="_url" value="{{ url('login') }}">
                <input type="hidden" id="_redirect" value="{{ url('/home') }}">
                <input type="hidden" id="_token" value="{{ csrf_token() }}">   <br><br> <br><br>
                  <div class="card-group">
                    <div class="card card-primary p-4">
                        
                        <div class="card-body">
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
                                <input class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" type="text" placeholder="Usuario" id="username"   autofocus autocomplete="off">
                               <span class="invalid-feedback" id="username_alert" role="alert" style="font-size: 100%;"></span>
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
                    </div>
                    <div class="card card card-primary p-4 text-white py-5 d-md-down-none" style="width:44%;background:#FFFFFF !important">
                        <div class="card-body text-center">
                            <div><br>
                                <img src="{{asset('images/logo/logo_principal.jpg')}}" style="width:100%"><br><br>
                                <span class="text-center text-muted"  style="color: #191919 !important">Bienvenidos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/admin/auth/login.js') }}"></script>
@endpush
