<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\VentasController;
use App\Models\Detalles_Ingresos;
use App\Models\Detalles_Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* ARTICULOS */
Route::resource('articulos', ArticulosController::class);

/* CLIENTES */
Route::resource('clientes', ClientesController::class);

/* DETALLES */
Route::resource('detalles', Detalles_Ingresos::class);

/* VENTAS DETALLES */
Route::resource('articulos', Detalles_Ventas::class);

/* TRABAJADORES */
Route::resource('trabajador', TrabajadorController::class);

/* VENTAS  */
Route::resource('ventas', VentasController::class);

