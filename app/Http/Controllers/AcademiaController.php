<?php

namespace App\Http\Controllers;

use App\Models\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academias = Academia::get();
        return view('admin.academia.index',compact('academias'));
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
     * @param  \App\Models\Academia  $academia
     * @return \Illuminate\Http\Response
     */
    public function show(Academia $academia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academia  $academia
     * @return \Illuminate\Http\Response
     */
    public function edit(Academia $academia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academia  $academia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $academia)
    {
        $academia =  Academia::find($academia);



//      dd($request);

       try {

         if ($request->file('logo')) {


            $file = $request->file('logo');
            $path = public_path() . '/images/logo';
            $fileName = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);
          
            
            $academia->name       = $request->name;
            $academia->direccion  = $request->direccion;
            $academia->telefono   = $request->telefono;
            $academia->email      = $request->email;
            $academia->logo       = $fileName;

            $academia->save();

           return \Redirect::back();
            
            
        }



           
       } catch (Exception $e) {
           
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academia  $academia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academia $academia)
    {
        //
    }
}
