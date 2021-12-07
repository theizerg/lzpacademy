@extends('layouts.admin')
@section('title','ESTUDIANTES')
@section('breadcrumb','ESTUDIANTES')
@section('content')

<div class="container">
    <a href="{{ url('estudiante/create') }}" class="btn blue darken-4 text-white btn-primary float-left btn-md">  <i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
                    Nuevo estudiante
            </a><br><br><br>
          <div class="row">
              <div class="col-lg-12">
                    <div class="card card-line-primary">
                          <div class="card-header">
                            <h4 class="card-title">Listado de estudiantes</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table id="tableExport" class="display table table-striped table-hover" >
                                <thead>
                                  <tr>
                                    <th>Nombre completo</th>
                                    <th>Sexo</th>
                                    <th>Documento</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $element)
                                    <tr>
                                      <td>{{ $element->display_name }}</td>
                                      @if ($element->genero_id == '1')
                                        <td><i class="fas fa-male fa-3x" style="color:#004EFF;"></i></td>
                                        @else
                                        <td><i class="fas fa-female fa-3x" style="color:#FF00BA;"></i></td>
                                      @endif
                                      <td>{{ $element->documento }}</td>
                                      <td>
                                        <span class="badge text-white {{ $element->status ? 'green' : 'red' }}">{{ $element->display_status }}</span>
                                      </td>
                                      <td>
                                        {{ $element->created_at->diffForHumans()  }} 
                                      </td>
                                     
                                      <td>
                                         
                                         <a href="{{ url('estudiante/'.$element->id,'edit') }}" class="btn btn-round blue darken-4 text-white btn-primary float-left btn-md">  <i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
                                        </a>
                                          <button type="button" class="btn btn-round red darken-3 text-white" data-toggle="modal" data-target="#EditarMatricula{{ $element->id }}">
                                            <span class="btn-inner--icon"><i class="mdi mdi-home"   data-toggle="tooltip" data-placement="top" title="Registrar matrícula" data-container="body" data-animation="true"></i></span>
                                          </button>
                                        </td>
                                     
                                    </tr>
                                       @include('admin.estudiante.partials.modal.edit')
                                       @include('admin.estudiante.partials.modal.matricula')
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>


@endsection

 
 