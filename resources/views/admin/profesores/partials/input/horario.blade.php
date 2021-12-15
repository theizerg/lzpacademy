<div class="row">
  <div class="col-4">
    <label>Profesor: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         
         <input type="hidden" name="profesor_id" value="{{ $profesor->profesor->id }}">
        <input type="text" value="{{ $profesor->profesor->display_name }}" class="form-control" disabled>
       </div>
    </div>
   <div class="col-4">
    <label>Curso: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
          <input type="hidden" name="curso_id" value="{{ $profesor->curso->id }}">
        <input type="text" value="{{ $profesor->curso->name }}" class="form-control" disabled>
       </div>
    </div>
  <div class="col-4">
    <label>Nivel del curso: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         <input type="hidden" name="nivel_id" value="{{ $profesor->nivel->id }}">
        <input type="text" value="{{ $profesor->nivel->name }}" class="form-control" disabled>
       </div>
    </div>

     <div class="col-6">
    <label>Calendario escolar activo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
        <input type="hidden" name="calendario_id" value="{{ $profesor->calendario->id }}">
        <input type="text" value="{{ $profesor->calendario->nb_calendario }}" class="form-control" disabled>
       </div>
    </div>
    <div class="col-6">
    <label>Periodo escolar activo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         <input type="hidden" name="periodo_id" value="{{ $profesor->profesor->periodoActivo->id }}">
        <input type="text" value="{{ $profesor->profesor->periodoActivo->nb_periodo }}" class="form-control" disabled>
       </div>
    </div>
    @php
      $turnos = App\Models\Turno::pluck('name','id')
    @endphp
    <div class="col-4">
      <label>Turno: </label>
       <div class="input-group input-group-merge mb-2">
        {!! Form::select('turno_id', $turnos, null, ['class' => 'form-control ','placeholder' =>'Seleccione el turno','id'=>'turnoclase']) !!}
       </div>
     </div>
      <div class="col-4">
      <label>Carga horaria de clase: </label>
       <div class="input-group input-group-merge mb-2">
         <select name="municipio_id" id="municipio_id" class="form-control">
          <option value="0" disable="true" selected="true"></option>
          
         </select>
      
       </div>
     </div>
</div>
@push('scripts')
  <script>
    var form    = false;


$(document).ready(function() {

  form = $('#main-form');
     
    $.fn.eventos();
    
  

  //$('#objetivos').hide();
    
});


$.fn.eventos = function(){


  $('#turnoclase').unbind('change');//borro evento click
  $('#turnoclase').on("change", function(e) { //asigno el evento change u otro
   
    turnoclase = e.target.value;
    console.log(turnoclase);
    if(turnoclase != '0')
    {
      $.fn.get_carga_horaria(turnoclase);
      
    }else{
      console.log('epa selecciona un proyecto valido');
    }

  });





  
}

/********* AJAX ***********/

$.fn.get_carga_horaria = function(turnoclase){

      $.ajax({url: "/turno/"+turnoclase+"/cargahoraria",
        method: 'GET',
        //data: {'turnoclase': turnoclase}
      }).then(function(result) {
        console.log(result);
          
        $('#municipio_id').html('<option value="0"> Seleccione </option>');
        

        $(result).each(function( index, element ) {

          $('#municipio_id').append('<option value="'+ element.id +'">'+ element.hh_inicio +' - '+ element.hh_fin +'</option>');
      
        });
      })
      .catch(function(err) {
          console.error(err);
      });

}

 

  </script>
@endpush