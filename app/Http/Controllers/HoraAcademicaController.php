<?php

namespace App\Http\Controllers;

use App\Models\HoraAcademica;
use Illuminate\Http\Request;

class HoraAcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = HoraAcademica::with(['nivel:id,name', 'cargaHoraria:id,nb_carga_horaria,hora_academica_id'])
                    ->get();

        return view('admin.horaacademica.index',compact('periodos'));
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
     * @param  \App\Models\HoraAcademica  $horaAcademica
     * @return \Illuminate\Http\Response
     */
    public function show(HoraAcademica $horaAcademica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoraAcademica  $horaAcademica
     * @return \Illuminate\Http\Response
     */
    public function edit(HoraAcademica $horaAcademica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HoraAcademica  $horaAcademica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoraAcademica $horaAcademica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoraAcademica  $horaAcademica
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoraAcademica $horaAcademica)
    {
        //
    }
}
