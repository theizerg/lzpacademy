<div class="modal fade" id="CrearUsuario" tabindex="-1" role="dialog" aria-labelledby="CrearUsuario" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CrearUsuario">Ingresar nueva directiva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       {!! Form::open(['route' => ['directiva.store'],'method' => 'POST']) !!}
        @include('admin.directiva.partials.input.form')

        <br><br>
        <button type="submit" class="btn blue darken-4 text-white form-control">Guardar cambios</button>
         {!! Form::close()!!}
      </div>
     
    </div>
  </div>
</div>