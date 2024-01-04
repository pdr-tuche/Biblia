<?php

namespace App\Http\Controllers;

use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $versiculo = Versiculo::create($request->all());
        if ($versiculo)
            return response()->json($versiculo, 201);
        return response()->json(['message' => 'erro ao criar versiculo'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $versiculo = Versiculo::find($id);
        if ($versiculo)
            return response()->json($versiculo, 200);
        return response()->json(['message' => 'versiculo não encontrado'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $versiculo = Versiculo::findOrFail($id);
        $versiculo = Versiculo::find($id);
        if($versiculo){
            $versiculo->update($request->all());
            return response()->json($versiculo, 200);
        }
        return response()->json(['message' => 'versiculo não encontrado'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Versiculo::destroy($id))
            return response()->json(['message' => 'versiculo deletado'], 200);
        return response()->json(['message' => 'versiculo não encontrado'], 404);
    }
}
