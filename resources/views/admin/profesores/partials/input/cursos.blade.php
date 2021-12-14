@php
         $asignacion = App\Models\CursoProfesor::where('profesor_id',$element->id)->get()
       @endphp
<div class="col-12">
    @foreach ($asignacion as $element)
        <ul>
            <li>{{ $element->curso->name }}</li>
            <li>{{ $element->nivel->name }}</li>

        </ul>
    @endforeach
</div>