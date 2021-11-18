<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Nivel::get();
        return view('admin.niveles.index',compact('academias'));
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
        $nivel =new Nivel();
        $nivel->name = $request->name;
        $nivel->status = $request->status;
        $nivel->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nivel)
    {
        $nivel = Nivel::find($nivel);
        $nivel->name = $request->name;
        $nivel->status = $request->status;
        $nivel->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        //
    }
}
