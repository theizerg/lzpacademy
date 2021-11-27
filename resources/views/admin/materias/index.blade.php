@extends('layouts.admin')
@section('title','MATERIAS')
@section('breadcrumb','MATERIAS')
@section('content')
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nueva materia
  </button><br><br><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de las nacionalidades permitidas en el curso</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>Código</th>
                      <th>Materia</th>
                      <th>Estado</th>
                      <th>Creado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($materias as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->codigo }}</td>
                        <td>{{ $element->nb_materia }}</td>
                        @if ($element->status == 1)
                          <td>
                             <span class="badge green text-white">Activo</span>
                          </td>
                          @else
                          <td> <span class="badge red text-white">Deshabilitado</span></td>
                        @endif
                        <td>
                          {{ $element->created_at->diffForHumans()  }} 
                        </td>
                       
                        <td>
                          
                          <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                          <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                        </button>
                        
                      </td>
                       
                      </tr>
                       @include('admin.materias.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.materias.partials.modal.create')
@endsection
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
@endpush

 
 