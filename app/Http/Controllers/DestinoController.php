<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Destino::all();
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
        return Destino::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Destino::findOrFail($id);
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
        $destino = Destino::findOrFail($id);
        $destino->update($request->all());
        return $destino;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destino = Destino::findOrFail($id);
        $destino->delete();
        return response()->json(['message' => 'Destino eliminado correctamente']);
    }
}
