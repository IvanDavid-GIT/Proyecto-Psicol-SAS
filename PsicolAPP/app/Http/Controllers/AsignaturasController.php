<?php

namespace App\Http\Controllers;

use App\Models\asignaturas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAsignaturasRequest;
use App\Http\Resources\v1\AsignaturasResource;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AsignaturasResource::collection(asignaturas::all());
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
    public function store(StoreAsignaturasRequest $request)
    {
        asignaturas::create($request->validated());

        return response()->json("Asignatura creada");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function show(asignaturas $asignatura)
    {
        return new AsignaturasResource($asignatura);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function edit(asignaturas $asignaturas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAsignaturasRequest $request, asignaturas $asignatura)
    {
        $asignatura->update($request->validated());
        return response()->json("Asignatura actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(asignaturas $asignatura)
    {
        $asignatura->delete();
        return response()->json("Agisnatura eliminada");
    }
}
