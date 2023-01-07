<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEstudientesRequest;
use App\Http\Resources\v1\EstudiantesResource;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstudiantesResource::collection(estudiantes::all());
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
    public function store(StoreEstudientesRequest $request)
    {
        estudiantes::create($request->validated());

        return response()->json("Estudiante creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(estudiantes $estudiante)
    {
        return new EstudiantesResource($estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEstudientesRequest $request, estudiantes $estudiante)
    {
        $estudiante->update($request->validated());
        return response()->json("Estudiante actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(estudiantes $estudiante)
    {
        $estudiante->delete();
        return response()->json("Estudiante eliminado");
    }
}
