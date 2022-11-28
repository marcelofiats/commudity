<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farms')->insert([
            [
                'name' => 'Fazenda São Leopoldo',
                'city' => 'São Paulo',
                'id_producer' => 1
            ],
            [
                'name' => 'Frenchi',
                'city' => 'Campo Limpo',
                'id_producer' => 1
            ],
            [
                'name' => 'Calegare',
                'city' => 'Americana',
                'id_producer' => 2
            ],
            [
                'name' => 'Pastor Amado',
                'city' => 'São José dos Pinhais',
                'id_producer' => 3
            ],
            [
                'name' => 'Fazenda Eulália',
                'city' => 'São José dos Pinhais',
                'id_producer' => 3
            ],
            [
                'name' => 'Ipiritinga',
                'city' => 'São José dos Pinhais',
                'id_producer' => 3
            ],
            [
                'name' => 'Nova Olive',
                'city' => 'Piracicaba',
                'id_producer' => 1
            ]
        ]);
    }
}
