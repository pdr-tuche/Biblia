<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\web\EstudeController;
use App\Http\Controllers\web\WebVersiculoController;
use App\Http\Controllers\web\WebTestamentoController;
use App\Http\Controllers\web\WebLivroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home'); // outra forma de renderizar uma view

Route::get("/estude-laravel", [EstudeController::class, "index"])->name("estude-laravel");

Route::get("/testamentos", [WebTestamentoController::class, "index"])->name("testamentos");

Route::get("/livros", [WebLivroController::class, "index"])->name("livros");
Route::get("/livros/{testamento}", [WebLivroController::class, "list"])->name("livros.list");

Route::get("/versiculos", [WebVersiculoController::class, "index"])->name("versiculos");
Route::get("/versiculos/{livro}", [WebVersiculoController::class, "list"])->name("versiculos.list");

