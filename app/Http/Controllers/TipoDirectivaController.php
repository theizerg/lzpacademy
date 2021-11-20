<?php

namespace App\Http\Controllers;

use App\Models\TipoDirectiva;
use Illuminate\Http\Request;

class TipoDirectivaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias =TipoDirectiva::get();
        return view('admin.tipodirectiva.index',compact('academias'));
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
        $tipodirectiva = new TipoDirectiva();
        $tipodirectiva->name = $request->name;
        $tipodirectiva->status = $request->status;
        $tipodirectiva->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDeSangre $tipoDeSangre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDeSangre $tipoDeSangre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tipodirectiva)
    {
        $tipodirectiva =TipoDirectiva::find($tipodirectiva);
        $tipodirectiva->name = $request->name;
        $tipodirectiva->status = $request->status;
        $tipodirectiva->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDeSangre  $tipoDeSangre
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDeSangre $tipodirectiva)
    {
        //
    }
}
