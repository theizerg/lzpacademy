@extends('layouts.admin')

@section('title', 'LOGINS')
@section('page_title', 'LOGINS')
@section('content')
  <div class="col-md-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <h3>Listado de inicio de sesión</h3>
       
      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-striped " style="width:100%">
              <thead>
              <tr>
              <th>#</th>
               <th>Usuario</th>
              <th>Inicio</th>
              <th>Cierre</th>
              <th>IP</th>
              <th>Cliente</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($logins as $login)
              <tr class="row{{ $login->id }}">
              <td>{{ $login->id }}</td>
              <td>{{ $login->user->display_name }}</td>
              <td>{{ $login->login_at  }}</td>
              <td>{{ $login->logout_at }}</td>
              <td>{{ $login->ip_address }}</td>
              <td>{{ $login->user_agent }}</td>
              </tr>
              @endforeach
              </tr>
              </tbody>                
          </table>
          </div>
          <!-- /.card-body -->
      </div>
  </div>




@endsection
