<?php

namespace App\Http\Controllers;

use App\Practica;
use Illuminate\Http\Request;

class PracticaController extends Controller
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
        $registro = new \App\Practica;
        $registro->nombre = $request->nombre;
        $registro->tipo = $request->tipo;
        $registro->materia = $request->materia;
        $registro->save();
        return response()->json($registro);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function show(Practica $practica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function edit(Practica $practica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practica $practica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practica $id)
    {
        Practica::destroy($id);
        return $id;
    }
}
