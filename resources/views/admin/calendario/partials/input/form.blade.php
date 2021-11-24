<div class="row">
  <div class="col-6">
    <label>Descripción del calendario: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('nb_calendario',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Año del calendario escolar: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('aa_escolar',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Fecha de inicio del calendario escolar: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::date('fecha_inicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Fecha fin del calendario escolar: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::date('fecha_fin',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
 

  <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del año escolar</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Inactivo
      </label>
    </div>
  </div>
 
 
</div>
