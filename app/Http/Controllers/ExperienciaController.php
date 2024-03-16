<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias = Experiencia::all();
        return response()->json($experiencias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'destino_id' => 'required|exists:destinos,id',
            'duracion' => 'required|string',
            'actividades' => 'required|string',
            'requisitos' => 'required|string',
        ]);

        $experiencia = Experiencia::create($request->all());
        return response()->json($experiencia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $experiencia = Experiencia::find($id);

        if (!$experiencia) {
            return response()->json(['message' => 'Experiencia no encontrada'], 404);
        }

        return response()->json($experiencia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'destino_id' => 'required|exists:destinos,id',
            'duracion' => 'required|string',
            'actividades' => 'required|string',
            'requisitos' => 'required|string',
        ]);

        $experiencia = Experiencia::find($id);

        if (!$experiencia) {
            return response()->json(['message' => 'Experiencia no encontrada'], 404);
        }

        $experiencia->update($request->all());
        return response()->json($experiencia, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experiencia = Experiencia::find($id);

        if (!$experiencia) {
            return response()->json(['message' => 'Experiencia no encontrada'], 404);
        }

        $experiencia->delete();
        return response()->json(['message' => 'Experiencia eliminada correctamente']);
    }
}
