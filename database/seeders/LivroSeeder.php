<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFile = 'database\seeders\abibliadigital_requests\livros\livros.json';
        if (file_exists($jsonFile)) {
            $json = file_get_contents($jsonFile);
            // Converte o JSON em um array associativo
            $data = json_decode($json, true);
            // Insere os dados na tabela
            $posicao= 0;
            foreach ($data as $item) {
                $testamento = $item['testament'] == 'VT' ? 1 : 2;
                Livro::factory()->create([
                    'nome' => $item['name'],
                    'posicao' => $posicao++,
                    'abreviacao' => $item['abbrev']['pt'],
                    'testamento_id' => $testamento,
                ]);
            }
        } else {
            $this->command->error('O arquivo JSON não foi encontrado.');
        }
    }
}
