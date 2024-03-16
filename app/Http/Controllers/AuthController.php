<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios', // Asegúrate de usar el nombre de la tabla correcto
            'password' => 'required|string|min:8', // Esto es lo que el usuario envía, puedes mantener 'password' aquí
        ]);

        $user = User::create([
            'nombre' => $validatedData['nombre'],
            'correo' => $validatedData['correo'],
            'contraseña' => Hash::make($validatedData['password']), // Hash la contraseña
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $token = $user->createToken('apiToken')->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Tokens Revoked']);
    }
}
