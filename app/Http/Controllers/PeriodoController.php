<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $periodos =  Periodo::with(['calendario:id,nb_calendario'])->get();

        return view ('admin.periodo.index',compact('periodos'));

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
       $periodo =new Periodo();
       $periodo->nb_periodo = $request->nb_periodo;
       $periodo->calendario_id = $request->calendario_id;
       $periodo->fe_inicio = $request->fe_inicio;
       $periodo->fe_fin = $request->fe_fin;
       $periodo->status = $request->status;
       $periodo->nu_periodo = $request->nu_periodo;
       $periodo->save();

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodo $periodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $periodo)
    {


       $periodo = Periodo::find($periodo);
       $periodo->nb_periodo = $request->nb_periodo;
       $periodo->calendario_id = $request->calendario_id;
       $periodo->fe_inicio = $request->fe_inicio;
       $periodo->fe_fin = $request->fe_fin;
       $periodo->status = $request->status;
       $periodo->nu_periodo = $request->nu_periodo;
       $periodo->save();

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodo $periodo)
    {
        //
    }
}
