<?php

namespace App\Http\Controllers;

use App\Models\FormaDePago;
use Illuminate\Http\Request;

class FormaDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $academias = FormaDePago::get();
        return view('admin.formadepago.index',compact('academias'));
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
        $pago =new FormaDePago();
        $pago->name = $request->name;
        $pago->status = $request->status;
        $pago->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function show(FormaDePago $formaDePago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function edit(FormaDePago $formaDePago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formaDePago)
    {
        $pago = FormaDePago::find($formaDePago);
        $pago->name = $request->name;
        $pago->status = $request->status;
        $pago->save();

        return \Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormaDePago  $formaDePago
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormaDePago $formaDePago)
    {
        //
    }
}
