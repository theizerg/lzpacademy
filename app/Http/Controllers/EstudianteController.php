<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Calendario;
use App\Models\CursoEstudiante;
use App\Models\EstudianteMateria;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Estudiante::get();

        return view('admin.estudiante.index', ['users' => $users]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matricula(Request $request)
    {   
       // dd();
       $calendario = Calendario::where('status',1)->first();

        $estudiante = CursoEstudiante::where('alumno_id',$request->alumno_id)->first();
       if ($estudiante) {
          
       $matricula = CursoEstudiante::where('alumno_id',$request->alumno_id)->first();
       //dd($matricula);
       $matricula->calendario_id = $calendario->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->curso_alumno_id = $request->curso_alumno_id;
       $matricula->tipo_condicion_alumno_id = $request->tipo_condicion_alumno_id;
       $matricula->nivel_alumno_id = $request->nivel_alumno_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->back();
       }
       else
       {

       $matricula = new  CursoEstudiante();
       $matricula->calendario_id = $calendario->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->curso_alumno_id = $request->curso_alumno_id;
       $matricula->tipo_condicion_alumno_id = $request->tipo_condicion_alumno_id;
       $matricula->nivel_alumno_id = $request->nivel_alumno_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->back();
       }



    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function materia(Request $request)
    {   
        //dd($request);
       $calendario = Calendario::where('status',1)->first();

        $estudiante = EstudianteMateria::where('alumno_id',$request->alumno_id)->first();
       if ($estudiante) {
          
       $matricula = CursoEstudiante::where('alumno_id',$request->alumno_id)->first();
       //dd($matricula);
       $matricula->calendario_id = $calendario->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->materia_id = $request->materia_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->back();
       }
       else
       {

       $matricula = new  EstudianteMateria();
       $matricula->calendario_id = $calendario->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->materia_id = $request->materia_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->back();
       }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Estudiante();
        $empleado->name = $request->name;
        $empleado->lastname = $request->lastname;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->lugar_nacimiento = $request->lugar_nacimiento;
        $empleado->direccion = $request->direccion;
        $empleado->tipo_documento = $request->tipo_documento;
        $empleado->documento = $request->documento;
        $empleado->edad = $request->edad;
        $empleado->status = $request->status;
        $empleado->genero_id = $request->genero_id;
        $empleado->estado_civil_id = $request->estado_civil_id;

        $empleado->save();

       return redirect()->to('estudiante');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Estudiante::find($id);
        return view('admin.estudiante.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request);

        $empleado = Estudiante::find($id);
        $empleado->name = $request->name;
        $empleado->lastname = $request->lastname;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->lugar_nacimiento = $request->lugar_nacimiento;
        $empleado->direccion = $request->direccion;
        $empleado->tipo_documento = $request->tipo_documento;
        $empleado->documento = $request->documento;
        $empleado->edad = $request->edad;
        $empleado->status = $request->status;
        $empleado->genero_id = $request->genero_id;
        $empleado->estado_civil_id = $request->estado_civil_id;

        $empleado->save();

       return redirect()->to('estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
