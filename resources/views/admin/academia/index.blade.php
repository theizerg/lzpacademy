@extends('layouts.admin')
@section('title','ACADEMIA')
@section('breadcrumb','ACADEMIA')
@section('content')
<main class="content">
          <div class="row">
              <div class="col-lg-12">
                    <div class="card card-line-primary">
                          <div class="card-header">
                            <h4 class="card-title">Listado de la academia</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table id="tableExport" class="display table table-striped table-hover" >
                                <thead>
                                  <tr>
                                    <th>Logo</th>
                                    <th>Nombre completo</th>
                                    <th>Sede</th>
                                    <th>Correo electrónico</th>
                                    <th>Teléfono</th>
                                    <th>Creado</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($academias as $element)
                                    <tr>
                                      <td><img src="{{ asset('/images/logo/'.$element->logo ) }}" width="100" alt=""></td>
                                      <td>{{ $element->name }}</td>
                                      <td>{{ $element->direccion }}</td>
                                      <td>{{ $element->email }}</td>
                                      
                                      <td>
                                      {{ $element->telefono }}
                                      </td>
                                      <td>
                                        {{ $element->created_at->diffForHumans()  }} 
                                      </td>
                                     
                                      <td>
                                        
                                        <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                                        <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                                      </button>
                                      
                                    </td>
                                     
                                    </tr>
                                     @include('admin.academia.partials.modal.edit')
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
        @include('admin.academia.partials.modal.create')

</main>
@endsection

 
 