<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Antigo Testamento
        DB::table('livros')->insert([
            'nome' => 'Gênesis',
            'posicao' => 1,
            'abreviacao' => 'Gn',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Êxodo',
            'posicao' => 2,
            'abreviacao' => 'Ex',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Levítico',
            'posicao' => 3,
            'abreviacao' => 'Lv',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Números',
            'posicao' => 4,
            'abreviacao' => 'Nm',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Deuteronômio',
            'posicao' => 5,
            'abreviacao' => 'Dt',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Josué',
            'posicao' => 6,
            'abreviacao' => 'Js',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Juízes',
            'posicao' => 7,
            'abreviacao' => 'Jz',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Rute',
            'posicao' => 8,
            'abreviacao' => 'Rt',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Samuel',
            'posicao' => 9,
            'abreviacao' => '1Sm',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Samuel',
            'posicao' => 10,
            'abreviacao' => '2Sm',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Reis',
            'posicao' => 11,
            'abreviacao' => '1Rs',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Reis',
            'posicao' => 12,
            'abreviacao' => '2Rs',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Crônicas',
            'posicao' => 13,
            'abreviacao' => '1Cr',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Crônicas',
            'posicao' => 14,
            'abreviacao' => '2Cr',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
              'nome' => 'Esdras',
                'posicao' => 15,
                'abreviacao' => 'Ed',
                'testamento_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
          ]);

        DB::table('livros')->insert([
            'nome' => 'Neemias',
            'posicao' => 16,
            'abreviacao' => 'Ne',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Tobias',
            'posicao' => 17,
            'abreviacao' => 'Tb',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
                'nome' => 'Judite',
                    'posicao' => 18,
                    'abreviacao' => 'Jt',
                    'testamento_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Ester',
            'posicao' => 19,
            'abreviacao' => 'Et',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Macabeus',
            'posicao' => 20,
            'abreviacao' => '1Mc',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Macabeus',
            'posicao' => 21,
            'abreviacao' => '2Mc',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Jó',
            'posicao' => 22,
            'abreviacao' => 'Jó',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Salmos',
            'posicao' => 23,
            'abreviacao' => 'Sl',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Provérbios',
            'posicao' => 24,
            'abreviacao' => 'Pv',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Eclesiastes',
            'posicao' => 25,
            'abreviacao' => 'Ec',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Cântico dos Cânticos',
            'posicao' => 26,
            'abreviacao' => 'Ct',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Sabedoria',
            'posicao' => 27,
            'abreviacao' => 'Sb',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Eclesiástico',
            'posicao' => 28,
            'abreviacao' => 'Eclo',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Isaías',
            'posicao' => 29,
            'abreviacao' => 'Is',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Jeremias',
            'posicao' => 30,
            'abreviacao' => 'Jr',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Lamentações',
            'posicao' => 31,
            'abreviacao' => 'Lm',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Baruc',
            'posicao' => 32,
            'abreviacao' => 'Br',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Ezequiel',
            'posicao' => 33,
            'abreviacao' => 'Ez',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Daniel',
            'posicao' => 34,
            'abreviacao' => 'Dn',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Oséias',
            'posicao' => 35,
            'abreviacao' => 'Os',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Joel',
            'posicao' => 36,
            'abreviacao' => 'Jl',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Amós',
            'posicao' => 37,
            'abreviacao' => 'Am',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Abdias',
            'posicao' => 38,
            'abreviacao' => 'Ab',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Jonas',
            'posicao' => 39,
            'abreviacao' => 'Jn',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Miquéias',
            'posicao' => 40,
            'abreviacao' => 'Mq',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Naum',
            'posicao' => 41,
            'abreviacao' => 'Na',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Habacuque',
            'posicao' => 42,
            'abreviacao' => 'Hc',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Sofonias',
            'posicao' => 43,
            'abreviacao' => 'Sf',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Ageu',
            'posicao' => 44,
            'abreviacao' => 'Ag',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Zacarias',
            'posicao' => 45,
            'abreviacao' => 'Zc',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Malaquias',
            'posicao' => 46,
            'abreviacao' => 'Ml',
            'testamento_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Novo Testamento

        DB::table('livros')->insert([
            'nome' => 'Mateus',
            'posicao' => 47,
            'abreviacao' => 'Mt',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Marcos',
            'posicao' => 48,
            'abreviacao' => 'Mc',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Lucas',
            'posicao' => 49,
            'abreviacao' => 'Lc',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'João',
            'posicao' => 50,
            'abreviacao' => 'Jo',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Atos dos Apóstolos',
            'posicao' => 51,
            'abreviacao' => 'At',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Romanos',
            'posicao' => 52,
            'abreviacao' => 'Rm',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Coríntios',
            'posicao' => 53,
            'abreviacao' => '1Cor',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
                'nome' => '2 Coríntios',
                'posicao' => 54,
                'abreviacao' => '2Cor',
                'testamento_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Gálatas',
            'posicao' => 55,
            'abreviacao' => 'Gl',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Efésios',
            'posicao' => 56,
            'abreviacao' => 'Ef',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Filipenses',
            'posicao' => 57,
            'abreviacao' => 'Fl',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Colossenses',
            'posicao' => 58,
            'abreviacao' => 'Cl',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Tessalonicenses',
            'posicao' => 59,
            'abreviacao' => '1Ts',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Tessalonicenses',
            'posicao' => 60,
            'abreviacao' => '2Ts',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1 Timóteo',
            'posicao' => 61,
            'abreviacao' => '1Tm',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2 Timóteo',
            'posicao' => 62,
            'abreviacao' => '2Tm',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Tito',
            'posicao' => 63,
            'abreviacao' => 'Tt',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Filemon',
            'posicao' => 64,
            'abreviacao' => 'Fm',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1Pedro',
            'posicao' => 65,
            'abreviacao' => '1Pd',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2Pedro',
            'posicao' => 66,
            'abreviacao' => '2Pd',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '1João',
            'posicao' => 67,
            'abreviacao' => '1Jo',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '2João',
            'posicao' => 68,
            'abreviacao' => '2Jo',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => '3João',
            'posicao' => 69,
            'abreviacao' => '3Jo',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Hebreus',
            'posicao' => 70,
            'abreviacao' => 'Hb',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Tiago',
            'posicao' => 71,
            'abreviacao' => 'Tg',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Judas',
            'posicao' => 72,
            'abreviacao' => 'Jd',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('livros')->insert([
            'nome' => 'Apocalipse',
            'posicao' => 73,
            'abreviacao' => 'Ap',
            'testamento_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
