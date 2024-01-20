<?php

namespace Database\Seeders;

use App\Models\Versiculo;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*"capitulo",
      "versiculo",
	  "texto",
	  "livro_id*/
    public function run(): void
    {
        // 1º passo: saber quantos livros estao dentro da pasta capitulos
        $scandirResponse = scandir(__DIR__ . '\abibliadigital_requests\capitulos');
        $livros = array_slice($scandirResponse, 2); // remove os dois primeiros itens do array (.) e (..)

        // 2º passo: pegar o id do livro
        foreach ($livros as $livro) {
            $livroId = DB::table('livros')->where('abreviacao', $livro)->value('id');

            // 3º passo: entrar na pasta do livro e escrever o capitulo com seus versiculos
            $scandirResponse = scandir(__DIR__ . '\abibliadigital_requests\capitulos\\' . $livro);
            $capitulos = array_slice($scandirResponse, 2);
            foreach ($capitulos as $capitulo) {
                $jsonFile = __DIR__ . '\abibliadigital_requests\capitulos\\' . $livro . '\\' . $capitulo;
                if (file_exists($jsonFile)) {
                    $json = file_get_contents($jsonFile);
                    // Converte o JSON em um array associativo
                    $data = json_decode($json, true);
                    // Insere os dados na tabela
                    $CapituloData = $data['chapter'];
                    $VersiculosData = $data['verses'];

                    foreach ($VersiculosData as $versiculo) {
                        Versiculo::factory()->create([
                            'capitulo' => $CapituloData['number'],
                            'versiculo' => $versiculo['number'],
                            'texto' => $versiculo['text'],
                            'livro_id' => $livroId,
                        ]);
                    }
                } else {
                    $this->command->error('O arquivo JSON não foi encontrado.');
                }
            }
        }
    }
}
