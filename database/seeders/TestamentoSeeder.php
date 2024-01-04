<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testamentos')->insert([
            'nome' => 'Antigo Testamento',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('testamentos')->insert([
            'nome' => 'Novo Testamento',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
