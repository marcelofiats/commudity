<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [
                'year' => '2018',
                'area' => '12000',
                'quantity' => '14000',
                'unit_price' => '12.9',
                'id_culture' => 1
            ],
            [
                'year' => '2021',
                'area' => '10000',
                'quantity' => '9000',
                'unit_price' => '19.9',
                'id_culture' => 1
            ],
            [
                'year' => '2018',
                'area' => '2000',
                'quantity' => '3460',
                'unit_price' => '12.9',
                'id_culture' => 1
            ],
            [
                'year' => '2020',
                'area' => '10876',
                'quantity' => '22890',
                'unit_price' => '9.9',
                'id_culture' => 2
            ],
            [
                'year' => '2021',
                'area' => '12000',
                'quantity' => '14000',
                'unit_price' => '14.9',
                'id_culture' => 2
            ],
            [
                'year' => '2020',
                'area' => '123896',
                'quantity' => '14000',
                'unit_price' => '7.9',
                'id_culture' => 5
            ],
            [
                'year' => '2021',
                'area' => '12931',
                'quantity' => '8900',
                'unit_price' => '9.9',
                'id_culture' => 5
            ],
            [
                'year' => '2020',
                'area' => '1100',
                'quantity' => '14000',
                'unit_price' => '15.3',
                'id_culture' => 3
            ],
            [
                'year' => '2020',
                'area' => '19000',
                'quantity' => '12783',
                'unit_price' => '8.3',
                'id_culture' => 6
            ],
            [
                'year' => '2020',
                'area' => '38463',
                'quantity' => '39781',
                'unit_price' => '2.4',
                'id_culture' => 7
            ],
            [
                'year' => '2020',
                'area' => '59312',
                'quantity' => '97877',
                'unit_price' => '6.9',
                'id_culture' => 5
            ],
            [
                'year' => '2020',
                'area' => '230874',
                'quantity' => '397846',
                'unit_price' => '5.5',
                'id_culture' => 4
            ],
            [
                'year' => '2019',
                'area' => '343972',
                'quantity' => '18868',
                'unit_price' => '6',
                'id_culture' => 2
            ],
            [
                'year' => '2019',
                'area' => '84323',
                'quantity' => '8830',
                'unit_price' => '6.6',
                'id_culture' => 3
            ],
            [
                'year' => '2019',
                'area' => '38342',
                'quantity' => '65065',
                'unit_price' => '7.9',
                'id_culture' => 5
            ],
            [
                'year' => '2021',
                'area' => '35652',
                'quantity' => '34239',
                'unit_price' => '9.9',
                'id_culture' => 5
            ],
            [
                'year' => '2019',
                'area' => '34302',
                'quantity' => '34208',
                'unit_price' => '12.9',
                'id_culture' => 3
            ],
            
        ]);
    }
}
