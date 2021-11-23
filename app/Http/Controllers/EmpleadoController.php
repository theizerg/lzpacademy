<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
     
    /*  public function __construct()
    {
        $this->middleware('permission:VerUsuario')->only('index'); 
        $this->middleware('permission:RegistrarUsuario')->only('create');
        $this->middleware('permission:RegistrarUsuario')->only('store');
        $this->middleware('permission:EditarUsuario')->only('edit');
        $this->middleware('permission:EditarUsuario')->only('update');
        $this->middleware('permission:VerUsuario')->only('show'); 

    }*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Empleado::get();

        return view('admin.empleados.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->name = $request->name;
        $empleado->lastname = $request->lastname;
        $empleado->correo = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->lugar_nacimiento = $request->lugar_nacimiento;
        $empleado->direccion = $request->direccion;
        $empleado->tipo_documento = $request->tipo_documento;
        $empleado->documento = $request->documento;
        $empleado->edad = $request->edad;
        $empleado->status = $request->status;
        $empleado->cargo_id = $request->cargo_id;
        $empleado->genero_id = $request->genero_id;
        $empleado->estado_civil_id = $request->estado_civil_id;

        $empleado->save();

       return redirect()->back();

        


        return redirect()->back();
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
        //
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

         $user = User::find(($id));
         $user->lastname = $request->lastname;
         $user->email = $request->email;
         $user->username = $request->username;
         $user->password = $request->password;
         //$user->status = $request->status;
         $user->name = $request->name;


          if ($request->has('role'))
        {
            $user->syncRoles($request->role);
        }

        $user->save();
        return redirect()->back();
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
