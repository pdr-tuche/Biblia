<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livro::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        if ($livro)
            return response()->json($livro, 201);
        return response()->json(['message' => 'erro ao criar livro'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $livro= Livro::findOrFail($id); // se nao for encontrado retorna um erro
        $livro = Livro::with('testamento')->find($id);
        if ($livro)
            return response()->json($livro, 200);
        return response()->json(['message' => 'livro não encontrado'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $livro = Livro::findOrFail($id);
        $livro = Livro::find($id);
        if($livro){
            $livro->update($request->all());
            return response()->json($livro, 200);
        }
        return response()->json(['message' => 'livro não encontrado'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Livro::destroy($id))
            return response()->json(['message' => 'livro deletado'], 204);
        return response()->json(['message' => 'erro ao deletar livro'], 400);
    }
}
