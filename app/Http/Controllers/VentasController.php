<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Ventas::all();
        return response()->json([ 'Ventas' => $ventas], 201); 
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
        $ventas = Ventas::create($request->all());
        return response()->json(['Ventas: ' => $ventas]);    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $ventas = Ventas::findOrFail($id);
        return response()->json(['Venta:' => $ventas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ventas = Ventas::findOrFail($id);
        $ventas->update($request->all());
        return response()->json(['Ventas: ' => $ventas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $ventas = Ventas::findOrFail($id);
        $ventas->delete();
        return response()->json(['message' => 'Venta eliminada correctamente']);
    }
}