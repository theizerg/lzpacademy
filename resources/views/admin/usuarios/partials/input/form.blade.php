<div class="row">
  <div class="col-6">
    <label>Nombres: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombres']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Apellidos: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
       {!! Form::text('lastname',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
  <div class="col-4">
    <label>Correo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1">@</span>
        </div>
       {!! Form::text('email',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Correo electrónico']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Usuario: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-lock"></i></span>
        </div>
       {!! Form::text('username',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Usuario']) !!}
    </div>
  </div>
  <div class="col-4">
    <label  for="role">Tipo de usuario</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="role" value="Usuario" checked> Usuario&nbsp;&nbsp;
        <input type="radio" name="role" value="Super Administrador"> Administrador
      </label>
    </div>
  </div>
  <div class="col-4">
    <label class="font-weight-bolder" for="password">Contraseña</label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-lock"></i></span>
        </div>
       <input type="password" style="font-size: 15px;" class="form-control" id="password" name="password" placeholder="Contraseña">
    </div>
    <span class="missing_alert text-danger" id="password_alert"></span>
  </div>
   <div class="col-4">
    <label class="font-weight-bolder" for="password">Contraseña</label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-lock"></i></span>
        </div>
       <input type="password" style="font-size: 15px;" class="form-control" id="password" name="password_confirmation" placeholder="Contraseña">
    </div>
    <span class="missing_alert text-danger" id="password_confirmation_alert"></span>
  </div>
 <div class="col-4">
    <label class="font-weight-bolder" for="status">Acceso al sistema</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Deshabilitado
      </label>
    </div>
  </div>
</div>

@push('scripts')
    
   
@endpush
