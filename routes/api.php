<?php


use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/teste', function () {
    // return json_encode(['msg' => 'Hello World!']);
    return response()->json(['message' => 'Hello World!']); // jeito mais bonito?
});

// // testamento
// // Route::post('/testamento', 'TestamentoController@store');
// Route::post('/testamento', [TestamentoController::class, 'store']);
// Route::get('/testamento', [TestamentoController::class, 'index']);
// Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
// Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
// Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

// // livro
// Route::post('/livro', [LivroController::class, 'store']);
// Route::get('/livro', [LivroController::class, 'index']);
// Route::get('/livro/{id}', [LivroController::class, 'show']);
// Route::put('/livro/{id}', [LivroController::class, 'update']);
// Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

// // versiculo
// Route::post('/versiculo', [VersiculoController::class, 'store']);
// Route::get('/versiculo', [VersiculoController::class, 'index']);
// Route::get('/versiculo/{id}', [VersiculoController::class, 'show']);
// Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
// Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);

// versiculo - apiResource faz tudo oq em cima faz, a diferença é que ele faz tudo de uma vez só, porém, no lugar de {id} ficara o nome do modulo(mas so em termo estetico, ele espera o id no lugar do {versiculo}).
Route::apiResource('versiculo', VersiculoController::class);

// testamento e livro - apiResources faz tudo oq apiResource faz, no entanto, ele faz para mais de um modulo.
Route::apiResources([
    'testamento' => TestamentoController::class,
    'livro' => LivroController::class
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
