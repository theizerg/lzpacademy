<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findByName($id);
        $permisos = $role->permissions;
        $name = $role->name;
       
        

        // $log = new LogSistema();

        // $log->user_id         = auth()->user()->id;
        // $log->tx_descripcion  = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver los permisos del Role: '.$role->name.' a las: '. date('H:m:i').' del día: '.date('d/m/Y');
        // $log->save();

        return view('admin.permission.index',compact('role','name','permisos'));
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
         

         $role = Role::findByName($id);

        


        if(! empty($request->permissions))
        {
            $role->syncPermissions($request->permissions);
        }
        else
        {
            $permissions =  Permission::all();

            foreach ($permissions as $permission)
            {
                $role->revokePermissionTo($permission->name);
            }
        }

        return json_encode(['success' => true]);
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
