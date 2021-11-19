<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $comentario = new Comentario();
        $comentario->name = $request->name;
        $comentario->lastname = $request->last;
        $comentario->email = $request->email;
        $comentario->descripcion = $request->message;

        $comentario->save();

        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function enviarcorreo(Request $request, $comentario)
    {
       

         $comentario = Comentario::find($comentario)->first();
          $to = $comentario->email;
        
        $html = '<h4>¡Hola!, Gracias por escribirnos, es para nosotros un placer comunicarnos contigo!</h4>'.
        '<li>'.'En pocos días te haremos llegar la información que nos has solicitado.'.'</li>';
        \Mail::send([], [], function ($message) use ($html,$comentario) {
          $message->to($comentario->email, '¡Buen día!')
                  ->subject('Mensaje de Bienvenida')
                  ->from('m.usman5991@gmail.com','Virat Gandhi')
                  ->setBody($html, 'text/html'); //html body
                 
        });

        $comentario->status  =1;

        $comentario->save();

        return \Redirect::to('home');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
