<?php

namespace App\Http\Controllers;

use App\Models\TipoAcademia;
use Illuminate\Http\Request;

class TipoAcademiaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias = TipoAcademia::get();
        return view('admin.tipoacademia.index',compact('academias'));
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
        $clase =new TipoAcademia();
        $clase->name = $request->name;
        $clase->status = $request->status;
        $clase->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $estadocivil)
    {   //dd($request);
        $clase = TipoAcademia::find($estadocivil);
        $clase->name = $request->name;
        $clase->status = $request->status;
        $clase->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAcademia  $TipoAcademia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAcademia $TipoAcademia)
    {
        //
    }
}
