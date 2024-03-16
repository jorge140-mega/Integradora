<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\ProveedorLocalController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CategoriaSostenibilidadController;
use App\Http\Controllers\ExperienciaCategoriaController;


Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('destinos', DestinoController::class);
Route::apiResource('experiencias', ExperienciaController::class);
Route::apiResource('proveedores-locales', ProveedorLocalController::class);
Route::apiResource('resenas', ResenaController::class);
Route::apiResource('reservas', ReservaController::class);
Route::apiResource('categorias-sostenibilidad', CategoriaSostenibilidadController::class);
Route::apiResource('experiencias-categorias', ExperienciaCategoriaController::class);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);



Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
