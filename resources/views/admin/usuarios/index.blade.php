@extends('layouts.admin')
@section('title','Usuarios')
@section('breadcrumb','Usuarios')
@section('content')
<main class="content">
   <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
                    Nuevo usuario
            </button><br><br><br>
          <div class="row">
              <div class="col-lg-12">
                    <div class="card card-line-primary">
                          <div class="card-header">
                            <h4 class="card-title">Listado de usuarios</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table id="tableExport" class="display table table-striped table-hover" >
                                <thead>
                                  <tr>
                                    <th>Nombre completo</th>
                                    <th>Usuario</th>
                                    <th>Correo electrónico</th>
                                    <th>Role</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $element)
                                    <tr>
                                      <td>{{ $element->display_name }}</td>
                                      <td>{{ $element->username }}</td>
                                      <td>{{ $element->email }}</td>
                                      <td>{!! $element->hasRole('Super Administrador') ? '<b>Administrador</b>' : 'Usuario' !!}</td>
                                      <td>
                                        <span class="badge text-white {{ $element->status ? 'green' : 'red' }}">{{ $element->display_status }}</span>
                                      </td>
                                      <td>
                                        {{ $element->created_at->diffForHumans()  }} 
                                      </td>
                                     
                                      <td>
                                         @if(Auth::user()->hasrole('Super Administrador') && Auth::user()->id != $element->id)
                                        <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                                        <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                                      </button>
                                       @endif
                                    </td>
                                     
                                    </tr>
                                     @include('admin.usuarios.partials.modal.edit')
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
        @include('admin.usuarios.partials.modal.create')

</main>
@endsection

 
 