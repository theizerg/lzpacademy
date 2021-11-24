<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendario = Calendario::with(['periodo:id,nb_periodo,calendario_id',
                                        'periodoActivo:id,nb_periodo,calendario_id'
                                        ])
                                    ->get();
       return view('admin.calendario.index',compact('calendario'));
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
       $calendario =new Calendario();
       $calendario->nb_calendario = $request->nb_calendario;
       $calendario->aa_escolar = $request->aa_escolar;
       $calendario->fecha_inicio = $request->fecha_inicio;
       $calendario->fecha_fin = $request->fecha_fin;
       $calendario->status = $request->status;
       $calendario->save();

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function show(Calendario $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendario $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $calendario)
    {
       $calendario = Calendario::find($calendario);
       $calendario->nb_calendario = $request->nb_calendario;
       $calendario->aa_escolar = $request->aa_escolar;
       $calendario->fecha_inicio = $request->fecha_inicio;
       $calendario->fecha_fin = $request->fecha_fin;
       $calendario->status = $request->status;
       $calendario->save();

       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendario  $calendario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendario $calendario)
    {
        //
    }
}
