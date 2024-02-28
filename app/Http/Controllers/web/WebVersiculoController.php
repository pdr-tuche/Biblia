<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Versiculo;

class WebVersiculoController extends Controller
{

    function index()
    {
        return redirect()->route("livros")->with("message", "Escolha um livro para listar os versículos");
    }

    function list($livro)
    {
        $versiculos = Versiculo::where("livro_id", $livro)->get();
        return view("versiculos", ["versiculos" => $versiculos]);
    }
}
