<?php

namespace App\Http\Controllers;

use App\Models\ProveedorLocal;
use Illuminate\Http\Request;

class ProveedorLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProveedorLocal::all();
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
         $proveedorLocal = ProveedorLocal::create($request->all());
         return $proveedorLocal;
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return ProveedorLocal::findOrFail($id);
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
        $proveedorLocal = ProveedorLocal::findOrFail($id);
        $proveedorLocal->update($request->all());
        return $proveedorLocal;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedorLocal = ProveedorLocal::findOrFail($id);
        $proveedorLocal->delete();
        return response()->json(['message' => 'Proveedor local eliminado correctamente']);
    }
}
