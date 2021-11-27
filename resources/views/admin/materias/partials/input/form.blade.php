<div class="row">
   <div class="col-6">
    <label>Código de la materia: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="mdi mdi-numeric"></i></span>
        </div>
       {!! Form::text('codigo',null,['class'=>'form-control','id'=>'txtCodigo', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Código de la materia']) !!}
    </div>
  </div>
 <div class="col-6">
    <label>Descripción: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user"></i></span>
        </div>
       {!! Form::text('nb_materia',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre de la materia']) !!}
    </div>
  </div>
 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado de la materia</label>
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
    
$(document).ready(function (){

 //Define la cantidad de numeros aleatorios.
var cantidadNumeros = 8;
var myArray = []
while(myArray.length < cantidadNumeros ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
    if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
$('#txtCodigo').val(myArray.join("") +'-'+'2' );
  });
</script>
<script>
    
$(document).ready(function (){
   
    //Define la cantidad de numeros aleatorios.
var cantidadNumeros = 12;
var myArray = []
while(myArray.length < cantidadNumeros ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
    if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}
$('#txtCodigoDeBarras').val(myArray.join(""));
  });
</script>

   
@endpush
