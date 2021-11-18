<div class="row">
  <div class="col-12">
    <label>Nombres: </label>
     <div class="form-group">
     {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombres']) !!}
     </div>
  </div>
 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del curso</label>
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
