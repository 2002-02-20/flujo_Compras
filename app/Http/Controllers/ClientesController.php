<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return response()->json($clientes);
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
        $request->validate(['nombre' => 'required', 'apellido' => 'required', 'sexo' => 'required', 'fecha_nacimiento' => 'required','tipo_documento' => 'required','num_documento' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required']);

        $clientes = Clientes::create($request->all());
        return response()->json(['clientes' => $clientes]);


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $clientes = Clientes::findOrFail($id);
        return response()->json($clientes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
      
        $request->validate(['nombre' => 'required', 'apellido' => 'required', 'sexo' => 'required', 'fecha_nacimiento' => 'required','tipo_documento' => 'required','num_documento' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required' . $id]);
        
        $clientes = Clientes::findOrFail($id);
        $clientes->update($request->all());
        return response()->json($clientes);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();
        return 'El registro se borro correctamente';
    
    }
}
