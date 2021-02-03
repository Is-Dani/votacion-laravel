<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $partidos=Partido::get();
       return view("partido.index",
      [
        'partidos'=>$partidos
        ])
       ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("partido.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // echo $input;
        Partido::create([
            'nombre' => $input['nombre'],
            'sigla' => $input['sigla'],
            'representante' => $input['representante'],
        ]);

        return view("mensaje")->withMensaje("se registro con exito"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        return view("partido.show")->withPartido($partido)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        return view("partido.edit")->withPartido($partido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        $input = $request->all();

        $partido->nombre = $input['nombre'];
        $partido->sigla = $input['sigla'];
        $partido->representante = $input['representante'];

        if ($partido->save()) {
            return view("mensaje")->withMensaje("se actualizo con exito"); 
        }

        abort(500, 'update cargo failed');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        if ($partido->delete())
        {
            return view("mensaje")->withMensaje("se elimino con exito"); 
        }
        abort(500, 'destroy cargo failed');
    }
}
