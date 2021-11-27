@extends('layouts.admin')
@section('title','HORA ACADEMICA')
@section('breadcrumb','HORA ACADEMICA')
@section('content')

         
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nuevo carga horaria de clases
  </button><br><br><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de horas académicas por turno</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Descripción</th>
                      <th>Inicio</th>
                      <th>Fin</th>
                      <th>Turno</th>
                      <th>Receso</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($carhahoraria as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                    
                        <td>{{ $element->nb_carga_horaria }}</td>
                        <td>{{ \Carbon\Carbon::parse($element->hh_inicio)->isoFormat('H:mm A') }}</td>
                        <td>{{ \Carbon\Carbon::parse($element->hh_fin)->isoFormat('H:mm A') }}</td>
                       
                        <td>
                         {{ $element->turno->name }}
                        </td>
                        @if ($element->bo_receso == 1)
                          <td><i class="fas fa-bell green-text fa-2x"></i></td>
                        @else
                         <td>
                          <i class="fas fa-bell-slash green-text fa-2x"></i>
                        </td>
                        @endif
                       
                       
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
                       @include('admin.cargahoraria.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.cargahoraria.partials.modal.create')

@endsection

 
 