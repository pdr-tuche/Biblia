<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('versiculos')->insert([
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 1,
                'texto' => 'No princípio, Deus criou os céus e a terra.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 2,
                'texto' => 'A terra era sem forma e vazia. Trevas cobriam a face do abismo, e o Espírito de Deus se movia sobre a face das águas.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 3,
                'texto' => 'Disse Deus: "Haja luz", e houve luz.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 4,
                'texto' => 'Deus viu que a luz era boa, e separou a luz das trevas.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 5,
                'texto' => 'E à luz Deus chamou "dia", e às trevas chamou "noite". Passaram-se a tarde e a manhã; esse foi o primeiro dia.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 6,
                'texto' => 'E disse Deus: "Haja entre as águas um firmamento que separe águas de águas".',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 7,
                'texto' => 'Fez, pois, Deus o firmamento e separou as águas que ficaram abaixo do firmamento das que ficaram por cima. E assim foi.',
            ],
            [
                'livro_id' => 1,
                'capitulo' => 1,
                'versiculo' => 8,
                'texto' => 'Ao firmamento Deus chamou "céu". Passaram-se' .
                    ' a tarde e a manhã; esse foi o segundo dia.',
            ]
        ]);

        DB::table('versiculos')->insert([
            'livro_id' => 23,
            'capitulo' => 23,
            'versiculo' => 4,
            'texto' => 'Mesmo quando eu andar por um vale de trevas e morte, não temerei perigo algum, pois tu estás comigo; a tua vara e o teu cajado me protegem.'
        ]);

        DB::table('versiculos')->insert([
            'livro_id' => 23,
            'capitulo' => 125,
            'versiculo' => 1,
            'texto' => 'Os que confiam no Senhor são como o monte Sião, que não se pode abalar, mas permanece para sempre.'
        ]);

        DB::table('versiculos')->insert([
            'livro_id' => 65,
            'capitulo' => 5,
            'versiculo' => 7,
            'texto' => 'Lancem sobre ele toda a sua ansiedade, porque ele tem cuidado de vocês.'
        ]);

    }
}
