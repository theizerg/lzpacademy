<div class="row">
  <div class="col-6">
    <label>Nombre del aula: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-building"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del aula']) !!}
    </div>
  </div>
  @php
  $estructura =  App\Models\Estructura::pluck('name','id')
 
@endphp
 <div class="col-6">
    <label>Cargo: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('estructura_id', $estructura, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del aula</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Inactivo
      </label>
    </div>
  </div>
 
 
</div>

@push('scripts')

   
@endpush
