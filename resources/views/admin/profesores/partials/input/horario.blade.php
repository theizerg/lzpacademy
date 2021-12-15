<div class="row">
  <div class="col-4">
    <label class="font-weight-bolder" for="empresa">Profesor: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         
         <input type="hidden" name="profesor_id" value="{{ $profesor->profesor->id }}">
        <input type="text" value="{{ $profesor->profesor->display_name }}" class="form-control" disabled>
       </div>
    </div>
   <div class="col-4">
    <label class="font-weight-bolder" for="empresa">Curso: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
          <input type="hidden" name="curso_id" value="{{ $profesor->curso->id }}">
        <input type="text" value="{{ $profesor->curso->name }}" class="form-control" disabled>
       </div>
    </div>
  <div class="col-4">
    <label class="font-weight-bolder" for="empresa">Nivel del curso: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         <input type="hidden" name="nivel_id" value="{{ $profesor->nivel->id }}">
        <input type="text" value="{{ $profesor->nivel->name }}" class="form-control" disabled>
       </div>
    </div>

     <div class="col-6">
    <label class="font-weight-bolder" for="empresa">Calendario escolar activo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
        <input type="hidden" name="calendario_id" value="{{ $profesor->calendario->id }}">
        <input type="text" value="{{ $profesor->calendario->nb_calendario }}" class="form-control" disabled>
       </div>
    </div>
    <div class="col-6">
    <label class="font-weight-bolder" for="empresa">Periodo escolar activo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
         <input type="hidden" name="periodo_id" value="{{ $profesor->profesor->periodo->id }}">
        <input type="text" value="{{ $profesor->profesor->periodo->nb_periodo }}" class="form-control" disabled>
       </div>
    </div>
    @php
      $turnos = App\Models\Turno::pluck('name','id');
      $dias = App\Models\DiaSemana::where('status',1)->pluck('name','id')
    @endphp
    <div class="col-4">
    <label class="font-weight-bolder" for="empresa">Turno: </label>
     <div class="input-group input-group-merge mb-2">
        {!! Form::select('turno_id', $turnos, null, ['class' => 'form-control ','placeholder' =>'Seleccione el turno','id'=>'turnoclase']) !!}
     </div>
 </div>
  <div class="col-sm-4">
    <label class="font-weight-bolder" for="empresa">Carga horaria de clases</label>
      <select name="carga_horaria_id" id="municipio_id" class="form-control">
    <option value="0" disable="true" selected="true"></option>
    
   </select>
  </div>
  <div class="col-4">
    <label class="font-weight-bolder" for="empresa">Día de clase: </label>
     <div class="input-group input-group-merge mb-2">
        {!! Form::select('dia_semana_id', $dias, null, ['class' => 'form-control ','placeholder' =>'Seleccione el día de clase','id'=>'turnoclase']) !!}
     </div>
 </div>
 <div class="col-12">
       <label for="textarea-counter">Observaciones del horario</label>
        <div class="form-label-group mb-0">
            
             {!! Form::textarea('tx_observaciones',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '60','rows'=>'3']) !!}
         
        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 60 </small>
    </div>
    <div class="col-md-12 text-center">  
                                      
          <div class="">  <br>

            <label>
               <b for="textarea-counter">Estado del horario</b><br>
              <input type="radio" name="status" id="status" value="1" checked>  Activo&nbsp;&nbsp;
              <input type="radio" name="status" id="status" value="0"> Inactivo&nbsp;&nbsp;
            </label>
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

  $('#municipio_id').unbind('change');//borro evento click
  $('#municipio_id').on("change", function(e) { //asigno el evento change u otro
    
     municipio_id= e.target.value;

   


     $.fn.get_parroquias(municipio_id);

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

          $('#municipio_id').append('<option value="'+ element.id +'">'+ element.hh_inicio+ ' - '+ element.hh_fin+'</option>');
      
        });
      })
      .catch(function(err) {
          console.error(err);
      });

}

    $.fn.get_parroquias = function(municipio_id){

 
      $.ajax({url: "/municipio/"+ municipio_id +"/parroquias",
      method: 'GET',

    }).then(function(result) {

          console.log(result);


        $('#parroquia_id').html('<option value="0"> Seleccione </option>');

        $( result).each(function( index, element ) {

          $('#parroquia_id').append('<option value="'+ element.id +'">'+ element.parroquia +'</option>');
      
        });
      })
      .catch(function(err) {
          console.error(err);
      });
      
         
   }

  </script>
@endpush