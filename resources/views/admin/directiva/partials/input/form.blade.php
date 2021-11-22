<div class="row">
  @php
    $tipodirectiva = App\Models\TipoDirectiva::pluck('name','id');
    $cargo = App\Models\Cargo::pluck('name','id');
  @endphp
   <div class="col-6">
    <label>Tipo de directiva: </label>
   <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('tipo_directiva_id', $tipodirectiva, null, ['class' => 'form-control ']) !!}
    </div>
  </div>
 <div class="col-6">
    <label>Cargo: </label>
   <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('cargo_id', $cargo, null, ['class' => 'form-control ']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Nombre y Apellido: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre y Apellido']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Documento: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-id-card"></i></span>
        </div>
       {!! Form::text('documento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Documento']) !!}
    </div>
  </div>

   <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado de la directiva</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Deshabilitado
      </label>
    </div>
  </div>
 
</div>

@push('scripts')
<script>
 $('.select2').select2({
 
});
</script>
   
@endpush
