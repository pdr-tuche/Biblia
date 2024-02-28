<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class WebLivroController extends Controller
{

    function index()
    {
        $livros = Livro::all();
        return view("livros", ["livros" => $livros]);
    }

    function list($testamento)
    {
        $livros = Livro::where("testamento_id", $testamento)->get();
        return view("livros", ["livros" => $livros]);
    }
}
