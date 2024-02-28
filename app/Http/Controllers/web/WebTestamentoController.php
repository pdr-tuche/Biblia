<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testamento;

class WebTestamentoController extends Controller
{
    public function index()
    {
        $testamentos = Testamento::all();
        return view(
            "testamentos",
            ["testamentos" => $testamentos]
        );
    }
}
