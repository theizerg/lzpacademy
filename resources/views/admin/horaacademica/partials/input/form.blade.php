<div class="row">
  <div class="col-6">
    <label>Descripción del periodo: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('nb_periodo',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Descripción del periodo']) !!}
    </div>
  </div>
  
 @php
  $calendario =  App\Models\Calendario::pluck('nb_calendario','id')
@endphp
 <div class="col-6">
    <label>Cargo: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('calendario_id', $calendario, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-12">
    <label>Orden del periodo: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-level-up-alt"></i></span>
        </div>
       {!! Form::text('nu_periodo',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Orden del periodo']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Fecha de inicio del calendario escolar: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::date('fe_inicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Fecha fin del calendario escolar: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::date('fe_fin',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
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
