@extends('layouts.admin')
@section('title','ESTUDIANTES ')
@section('breadcrumb','ESTUDIANTES  ')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <p>Editar datos del profesor <b>{{ $empleado->display_name }}</b></p>
      </div>
      <div class="card-body">
        {!! Form::model($empleado, ['route' => ['profesores.update',$empleado->id],'method' => 'PUT','enctype'=>'multipart/form-data']) !!}
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

 
 