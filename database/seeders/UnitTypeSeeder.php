<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_types')->insert([
            [
                'name'=>'Quilograma',
                'sigle' => 'Kg',
            ],
            [
                'name'=>'Sacaria',
                'sigle' => 'SA'
            ],
            [
                'name' => 'Litros',
                'sigle' => 'LT',
            ],
            [
                'name' => 'Caixa',
                'sigle' => 'CX',
            ],
            [
                'name' => 'Unidade',
                'sigle' => 'UN'
            ]
        ]);
    }
}
