@extends('layouts.admin')
@section('title','Roles')
@section('page_title', 'Listado de Roles')
@section('content')
 <main class="content">
   <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
            Nuevo Role
    </button><br><br><br>
  <div class="row">
      <div class="col-lg-12">
            <div class="card card-line-primary">
                  <div class="card-header">
                    <h4 class="card-title">Listado de usuarios</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                          <tr>
                           <th>#</th>
                            <th>Nombre completo</th>
                            <th>Usuarios que están usando el Role</th>
                            <th>Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($roles as $element)
                              <tr class="row{{ $element->id }}">
                              <td>{{ $element->id }}</td>
                              <td>{{ $element->name }}</td>
                              <td>{{ $element->count_user }}</td>
                             
                              <td>
                                @can('EditarRole')
                                 <a class="btn btn-round blue darken-4" data-toggle="tooltip" data-placement="top"
                                title="Asignar permisos." href="{{ url('permission', [$element->name]) }}"><i class="mdi mdi-lock text-center text-white"></i> </a>
                               @endcan
                                @can('EditarRole')
                                   <a  data-toggle="modal" data-target="#EditarUsuario{{$element->id}} " class="btn btn-round blue darken-4"><i class="mdi mdi-pencil mt-2 text-white" data-toggle="tooltip" data-placement="top"
                                title="Editar Role."></i></a>
                               @endcan
                                @can('EliminarRole')
                                   <a href="{{ url('/roles/borrar',$element->id) }}" class="btn btn-round red darken-4"><i class="mdi mdi-delete mt-2 text-white" data-toggle="tooltip" data-placement="top"
                                title="Eliminar role."></i></a>
                               @endcan
                                 
                              </td>
                              </tr>
                             @include('admin.roles.partials.modal.edit')

                              @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        @include('admin.roles.partials.modal.create')

</main>

@endsection