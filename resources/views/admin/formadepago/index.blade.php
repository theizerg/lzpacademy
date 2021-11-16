@extends('layouts.admin')
@section('title','METODOS DE PAGO')
@section('breadcrumb','METODOS DE PAGO')
@section('content')
<main class="content">
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nuevo método de pago
  </button><br><br><br>
  <div class="row">
      <div class="col-lg-12">
            <div class="card card-line-primary">
                  <div class="card-header">
                    <h4 class="card-title">Listado de los métodos de pagos aceptados</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="tableExport" class="display table table-striped table-hover" >
                        <thead>
                          <tr>
                           
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Creado</th>
                            <th>Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($academias as $element)
                            <tr>
                              <td>{{ $element->name }}</td>
                              @if ($element->status == 1)
                                <td>
                                   <span class="badge green text-white">Activo</span>
                                </td>
                                @else
                                <td> <span class="badge red text-white">Deshabilitado</span></td>
                              @endif
                              <td>
                                {{ $element->created_at->diffForHumans()  }} 
                              </td>
                             
                              <td>
                                
                                <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                                <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                              </button>
                              
                            </td>
                             
                            </tr>
                             @include('admin.formadepago.partials.modal.edit')
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
  @include('admin.formadepago.partials.modal.create')

</main>
@endsection

 
 