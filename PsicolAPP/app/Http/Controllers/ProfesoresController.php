<?php

namespace App\Http\Controllers;

use App\Models\profesores;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfesoresRequest;
use App\Http\Resources\v1\ProfesoresResource;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProfesoresResource::collection(profesores::all());
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
    public function store(StoreProfesoresRequest $request)
    {
        profesores::create($request->validated());

        return response()->json("Profesor creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function show(profesores $profesor)
    {
        return new ProfesoresResource($profesor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function edit(profesores $profesores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProfesoresRequest $request, profesores $profesor)
    {
        $profesor->update($request->validated());
        return response()->json("Profesor actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function destroy(profesores $profesor)
    {
        $profesor->delete();
        return response()->json("Profesor eliminado");
    }
}
