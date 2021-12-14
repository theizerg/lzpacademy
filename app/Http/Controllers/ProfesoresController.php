<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use App\Models\Periodo;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Profesores::get();

        return view('admin.profesores.index', ['users' => $users]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matricula(Request $request)
    {   
        
        $periodo = Periodo::where('status',1)->first();


       $calendario = Calendario::where('status',1)->first();

        $estudiante = CursoEstudiante::where('alumno_id',$request->alumno_id)->first();
       if ($estudiante) {
          
       $matricula = CursoEstudiante::where('alumno_id',$request->alumno_id)->first();
       //dd($matricula);
       $matricula->calendario_id = $calendario->id;
       $matricula->periodo_id = $periodo->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->curso_alumno_id = $request->curso_alumno_id;
       $matricula->tipo_condicion_alumno_id = $request->tipo_condicion_alumno_id;
       $matricula->nivel_alumno_id = $request->nivel_alumno_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->to('profesores');
       }
       else
       {
       

       $matricula = new  CursoEstudiante();
       $matricula->calendario_id = $calendario->id;
       $matricula->periodo_id = $periodo->id;
       $matricula->alumno_id = $request->alumno_id;
       $matricula->curso_alumno_id = $request->curso_alumno_id;
       $matricula->tipo_condicion_alumno_id = $request->tipo_condicion_alumno_id;
       $matricula->nivel_alumno_id = $request->nivel_alumno_id;
       $matricula->fecha_matricula = $request->fecha_matricula;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->to('profesores');
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

       return redirect()->to('profesores');
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

       return redirect()->to('profesores');
       }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $periodo = Periodo::where('status',1)->first();

        $empleado = new Profesores();
        $empleado->name = $request->name;
        $empleado->periodo_id = $periodo->id;
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
        $empleado = Profesores::find($id);
        return view('admin.profesores.edit', compact('empleado'));
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
         $periodo = Periodo::where('status',1)->first();

        $empleado = Profesores::find($id);
        $empleado->name = $request->name;
        $empleado->periodo_id = $periodo->id;
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

       return redirect()->to('profesores');
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
