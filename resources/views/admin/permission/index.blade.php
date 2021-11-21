@extends('layouts.admin')

@section('title', 'PERMISOS')
@section('page_title', 'PERMISOS')


@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="card card-line-primary">
              <div class="card-header">
                <h2 class="card-title">Permisos del rol</h2> <h3 class="float-right ml-4">({{$role->name}})</h3>
                <div class="card-tools"></div>
              </div>
              <div class="card-body table-responsive table-striped">
              <form role="form" id="main-form">
                  <input type="hidden" id="_url" value="{{ url('permission', [$role->name]) }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                  <input type="hidden" value="{{$role->name}}" name="rolename">
                  <table class="table table-responsive">
                   
                    <tr>
                      <td>
                        Ver usuarios<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerUsuario" {{ $role->hasPermissionTo('VerUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Agregar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarUsuario" {{ $role->hasPermissionTo('RegistrarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarUsuario" {{ $role->hasPermissionTo('EditarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarUsuario" {{ $role->hasPermissionTo('EliminarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver logins</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerLogins" {{ $role->hasPermissionTo('VerLogins') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    
                      <td>
                        Asignar permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="AsignarPermisos" {{ $role->hasPermissionTo('AsignarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerPermisos" {{ $role->hasPermissionTo('VerPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                       <td>
                        Registrar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="CrearPermisos" {{ $role->hasPermissionTo('CrearPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarPermisos" {{ $role->hasPermissionTo('EditarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarPermisos" {{ $role->hasPermissionTo('EliminarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerRole" {{ $role->hasPermissionTo('VerRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarRole" {{ $role->hasPermissionTo('RegistrarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarRole" {{ $role->hasPermissionTo('EditarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Eliminar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarRole" {{ $role->hasPermissionTo('EliminarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <br>
                
                     
                      
                  </table>
                  <div class="card-footer clearfix"></div>
                  <div class="form-group pading">
                     <label for="name">Contraseña actual</label>
                     <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Contraseña actual">
                     <span class="missing_alert text-danger" id="current_password_alert"></span>
                    </div>
                    <button type="submit" class="btn blue darken-4 text-white ajax form-control" id="submit">
                      <i id="ajax-icon" class="fa fa-edit"></i> Editar
                    </button>
                  </div>
                </form>
            </div>
          </div>
      </div>



@endsection
@push('scripts')
 
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
   
  <script src="{{ asset('js/admin/permission/index.js') }}"></script>
@endpush
