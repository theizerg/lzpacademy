@extends('layouts.admin')
@section('title','PROFESORES')
@section('breadcrumb','PROFESORES')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <p>Crear nuevo Profesor</p>
      </div>
      <div class="card-body">
        {!! Form::open(['route' => ['profesores.store'],'method' => 'POST']) !!}
        @include('admin.profesores.partials.input.form')

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

 
 