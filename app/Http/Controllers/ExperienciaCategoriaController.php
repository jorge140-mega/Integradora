<?php

namespace App\Http\Controllers;

use App\Models\ExperienciaCategoria;
use Illuminate\Http\Request;

class ExperienciaCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ExperienciaCategoria::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experienciaCategoria = ExperienciaCategoria::create($request->all());
        return $experienciaCategoria;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return ExperienciaCategoria::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $experienciaCategoria = ExperienciaCategoria::findOrFail($id);
        $experienciaCategoria->update($request->all());
        return $experienciaCategoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experienciaCategoria = ExperienciaCategoria::findOrFail($id);
        $experienciaCategoria->delete();
        return response()->json(['message' => 'Relación de experiencia y categoría eliminada correctamente']);
    }
}
