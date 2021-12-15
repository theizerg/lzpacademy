@extends('layouts.admin')
@section('title','PROFESORES')
@section('breadcrumb','PROFESORES')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <p>Crear nuevo horario del profesor <b>{{ $profesor->display_name }}</b></p>
      </div>
      <div class="card-body">
        {!! Form::open(['route' => ['profesores.horario'],'method' => 'POST','id'=>'main-form']) !!}
        @include('admin.profesores.partials.input.horario')

        <br><br>
       
      
      <div class="card-footer">
         <button type="submit" class="btn blue darken-4 text-white form-control">Guardar cambios</button>
            {!! Form::close()!!}
      </div>
      </div>
    </div>
  </div>
</div>
  


@endsection

 
 