<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testamento = Testamento::create($request->all());
        if ($testamento)
            return response()->json($testamento, 201);
        return response()->json(['message' => 'erro ao criar testamento'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $testamento= Testamento::findOrFail($id);
        $testamento = Testamento::find($id);
        if($testamento)
            return response()->json($testamento, 200);
        return response()->json(['message' => 'testamento não encontrado'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $testamento = Testamento::findOrFail($id);
        $testamento = Testamento::find($id);
        if($testamento){
            $testamento->update($request->all());
            return response()->json($testamento, 200);
        }
        return response()->json(['message' => 'testamento não encontrado'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Testamento::destroy($id))
            return response()->json(['message' => 'testamento removido com sucesso'], 200);
        return response()->json(['message' => 'testamento não encontrado'], 404);
    }
}
