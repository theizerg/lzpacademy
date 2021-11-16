<div class="row">
  <div class="col-12">
    <label>Nombre del role: </label>
     <div class="form-group">
     {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del role']) !!}
     </div>
  </div>
   
</div>

@push('scripts')
    
   
@endpush
