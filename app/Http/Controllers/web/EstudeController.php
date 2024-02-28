<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudeController extends Controller
{
    function index(){
        return view('estude');
    }
}
