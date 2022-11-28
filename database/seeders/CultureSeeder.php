<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cultures')->insert([
            [
                'name' => 'Soja',
                'id_unit_type' => 1
            ],
            [
                'name' => 'Arroz',
                'id_unit_type' => 1
            ],
            [
                'name' => 'Milho',
                'id_unit_type' => 1
            ],
            [
                'name' => 'Feijão',
                'id_unit_type' => 1
            ],
            [
                'name' => 'Leite',
                'id_unit_type' => 3
            ],
            [
                'name' => 'Café',
                'id_unit_type' => 2
            ],
            [
                'name' => 'Açucar',
                'id_unit_type' => 1
            ],
            [
                'name' => 'Cana de Açucar',
                'id_unit_type' => 1
            ]           
            
        ]);
    }
}
