<?php

namespace App\Http\Controllers;

use App\Models\Directiva;
use Illuminate\Http\Request;

class DirectivaController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Directiva::get();
        return view('admin.directiva.index',compact('academias'));
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
        $directiva =new Directiva();
        $directiva->name = $request->name;
        $directiva->tipo_directiva_id = $request->tipo_directiva_id;
        $directiva->cargo_id = $request->cargo_id;
        $directiva->documento = $request->documento;
        $directiva->status = $request->status;
        $directiva->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$curso)
    {
        $directiva = Directiva::find($curso);
        $directiva->name = $request->name;
        $directiva->tipo_directiva_id = $request->tipo_directiva_id;
        $directiva->cargo_id = $request->cargo_id;
        $directiva->documento = $request->documento;
        $directiva->status = $request->status;
        $directiva->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
