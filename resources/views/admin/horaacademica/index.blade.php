@extends('layouts.admin')
@section('title','HORA ACADEMICA')
@section('breadcrumb','HORA ACADEMICA')
@section('content')

         
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nuevo periodo escolar
  </button><br><br><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de horas académicas por nivel</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Periodo</th>
                      <th>Nivel</th>
                      <th>Creado</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($periodos as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->nb_hora_academica }}</td>
                       
                        <td>
                         {{ $element->nivel->name }}
                        </td>
                       
                       
                       <td>
                          {{ $element->created_at->diffForHumans()  }} 
                        </td>
                       
                         @if ($element->status == 1)
                          <td>
                             <span class="badge green text-white">Activo</span>
                          </td>
                          @else
                          <td> <span class="badge red text-white">Inactivo</span></td>
                        @endif
                        <td>
                          
                          <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                          <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                        </button>
                        
                      </td>
                       
                      </tr>
                       @include('admin.periodo.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.periodo.partials.modal.create')

@endsection

 
 