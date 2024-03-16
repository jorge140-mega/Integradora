<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Aplica el middleware 'is_admin' a todos los métodos de este controlador
        $this->middleware('is_admin');
    }
    public function index()
    {
        // Solo los administradores pueden llegar hasta aquí
        return response()->json(['message' => 'Bienvenido, Administrador']);
    }
}
