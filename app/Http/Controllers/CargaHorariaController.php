<?php

namespace App\Http\Controllers;

use App\Models\CargaHoraria;
use Illuminate\Http\Request;

class CargaHorariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idHoraAcademica)
    {
      $carhahoraria= CargaHoraria::with(['turno:id,name', 'horaAcademica:id,nb_hora_academica'])
                            ->where('hora_academica_id', $idHoraAcademica)
                            ->get();

       return view('admin.cargahoraria.index',compact('carhahoraria','idHoraAcademica'));
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
        //dd($request);

        $carga = new CargaHoraria();
        $carga->nb_carga_horaria = $request->nb_carga_horaria;
        $carga->hora_academica_id = $request->hora_academica_id;
        $carga->nu_orden = $request->nu_orden;
        $carga->hh_inicio = $request->hh_inicio;
        $carga->hh_fin = $request->hh_fin;
        $carga->turno_id = $request->turno_id;
        $carga->bo_receso = $request->bo_receso;
        $carga->status = $request->status;

        $carga->save();

        return redirect()->to('hora-academica');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CargaHoraria  $cargaHoraria
     * @return \Illuminate\Http\Response
     */
    public function show(CargaHoraria $cargaHoraria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CargaHoraria  $cargaHoraria
     * @return \Illuminate\Http\Response
     */
    public function edit(CargaHoraria $cargaHoraria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CargaHoraria  $cargaHoraria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cargaHoraria)
    {
        //dd(substr($request->hh_inicio,15,13));
        $carga = CargaHoraria::find($cargaHoraria);
        $carga->nb_carga_horaria = $request->nb_carga_horaria;
        $carga->hora_academica_id = $request->hora_academica_id;
        $carga->nu_orden = $request->nu_orden;
        $carga->hh_inicio = $request->hh_inicio;
        $carga->hh_fin = $request->hh_fin;
        $carga->turno_id = $request->turno_id;
        $carga->bo_receso = $request->bo_receso;
        $carga->status = $request->status;

        $carga->save();

        return redirect()->to('hora-academica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CargaHoraria  $cargaHoraria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargaHoraria $cargaHoraria)
    {
        //
    }
}
