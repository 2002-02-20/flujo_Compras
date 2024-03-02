<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulos::all();
        return response()->json($articulos);
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
        

        $request->validate(['codigo' => 'required', 'nombre' => 'required', 'descripcion' => 'required', 'imagen' => 'required']);

        $articulos = Articulos::create($request->all());
        return response()->json(['articulos' => $articulos]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $articulos = Articulos::findOrFail($id);
        return response()->json($articulos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulos $articulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate(['codigo' => 'required', 'nombre' => 'required', 'descripcion' => 'required', 'imagen' => 'required' . $id,]);
        

        $articulos = Articulos::findOrFail($id);
        $articulos->update($request->all());
        return response()->json($articulos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $articulos = Articulos::findOrFail($id);
        $articulos->delete();
        return 'El registro se borro correctamente';
    }
}
