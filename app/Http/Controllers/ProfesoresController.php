<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use App\Models\Periodo;
use App\Models\CursoProfesor;
use App\Models\CargaHoraria;
use App\Models\Calendario;
use App\Models\ProfesorHorario;
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
    public function curso(Request $request)
    {   
        

       // dd($request);
        $periodo = Periodo::where('status',1)->first();


       $calendario = Calendario::where('status',1)->first();

        $profesor = CursoProfesor::where('profesor_id',$request->profesor_id)->first();

       if ($profesor) {
          
       $matricula = CursoProfesor::where('profesor_id',$request->profesor_id)->first();
       
       $matricula->calendario_id = $calendario->id;
       $matricula->periodo_id = $periodo->id;
       $matricula->profesor_id = $request->profesor_id;
       $matricula->curso_id = $request->curso_alumno_id;
       $matricula->nivel_id = $request->nivel_alumno_id;
       $matricula->fecha_ingreso = $request->fecha_ingreso;
       $matricula->tx_observaciones = $request->tx_observaciones;
       $matricula->status = $request->status;

       $matricula->save();

       return redirect()->to('profesores');
       }
       else
       {
       

       $matricula = new  CursoProfesor();
       $matricula->calendario_id = $calendario->id;
       $matricula->periodo_id = $periodo->id;
       $matricula->profesor_id = $request->profesor_id;
       $matricula->curso_id = $request->curso_alumno_id;
       $matricula->nivel_id = $request->nivel_alumno_id;
       $matricula->fecha_ingreso = $request->fecha_ingreso;
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
    public function horario($profesor_id)
    {   
        
        $profesor = CursoProfesor::where('profesor_id',$profesor_id)->first();
        //dd($profesor->periodoActivo);

        return view('admin.profesores.horario',compact('profesor'));

     }


     public function cargahoraria($turno_id)
    {   
        
        $cargahoraria = CargaHoraria::where('turno_id',$turno_id)
        ->where('nb_carga_horaria','<>','RECESO')
        ->where('nb_carga_horaria','<>','DESCANSO')
        ->where('nb_carga_horaria','<>','DIR. GRUPO')
        ->where('nb_carga_horaria','<>','ALMUERZO')
        ->get();
        //dd($profesor->periodoActivo);

        return $cargahoraria;

     }


    public function guardarhorario(Request $request)
    {   
        //dd($request);

        $horario = ProfesorHorario::where('profesor_id',$request->profesor_id)
        ->where('turno_id',$request->turno_id)
        ->where('carga_horaria_id',$request->carga_horaria_id)
        ->first();
        //dd($profesor);

        if ($horario) {
            $horario = ProfesorHorario::find($horario->id);

            $horario->carga_horaria_id = $request->carga_horaria_id;
            $horario->calendario_id = $request->calendario_id;
            $horario->periodo_id = $request->periodo_id;
            $horario->profesor_id = $request->profesor_id;
            $horario->curso_id = $request->curso_id;
            $horario->nivel_id = $request->nivel_id;
            $horario->turno_id = $request->turno_id;
            $horario->dia_semana_id = $request->dia_semana_id;
            $horario->fecha_ingreso = date('d/m/Y');
            $horario->tx_observaciones = $request->tx_observaciones;
            $horario->status = $request->status;
            $horario->save();
            
            return \Redirect::to('profesores');
        }else
        {
            $horario = new ProfesorHorario();

            $horario->carga_horaria_id = $request->carga_horaria_id;
            $horario->calendario_id = $request->calendario_id;
            $horario->periodo_id = $request->periodo_id;
            $horario->profesor_id = $request->profesor_id;
            $horario->curso_id = $request->curso_id;
            $horario->nivel_id = $request->nivel_id;
            $horario->turno_id = $request->turno_id;
            $horario->dia_semana_id = $request->dia_semana_id;
            $horario->fecha_ingreso = date('d/m/Y');
            $horario->tx_observaciones = $request->tx_observaciones;
            $horario->status = $request->status;
            $horario->save();

            return \Redirect::to('profesores');
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
