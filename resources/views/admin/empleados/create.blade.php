@extends('layouts.admin')
@section('title','EMPLEADOS')
@section('breadcrumb','EMPLEADOS')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <p>Crear nuevo Empleado</p>
      </div>
      <div class="card-body">
        {!! Form::open(['route' => ['empleado.store'],'method' => 'POST']) !!}
        @include('admin.empleados.partials.input.form')

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

 
 