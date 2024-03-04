<?php

namespace App\Http\Controllers;

use App\Models\CategoriaSostenibilidad;
use Illuminate\Http\Request;

class CategoriaSostenibilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoriaSostenibilidad::all();
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
        $categoria = CategoriaSostenibilidad::create($request->all());
        return response()->json($categoria, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return CategoriaSostenibilidad::findOrFail($id);
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
        $categoria = CategoriaSostenibilidad::findOrFail($id);
        $categoria->update($request->all());
        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria = CategoriaSostenibilidad::findOrFail($id);
        $categoria->delete();
        return response()->json(['message' => 'Categoría eliminada correctamente']);
    }
}
