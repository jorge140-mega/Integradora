<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;

class ResenaController extends Controller
{
    public function index()
    {
        return Resena::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'destino_id' => 'required|exists:destinos,id',
            'calificacion' => 'required|integer|between:1,5',
            'comentario' => 'required|string',
        ]);

        return Resena::create($request->all());
    }

    public function show($id)
    {
        return Resena::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario_id' => 'exists:usuarios,id',
            'destino_id' => 'exists:destinos,id',
            'calificacion' => 'integer|between:1,5',
            'comentario' => 'string',
        ]);

        $resena = Resena::findOrFail($id);
        $resena->update($request->all());
        return $resena;
    }

    public function destroy($id)
    {
        $resena = Resena::findOrFail($id);
        $resena->delete();
        return response()->json(['message' => 'Reseña eliminada correctamente']);
    }
}
