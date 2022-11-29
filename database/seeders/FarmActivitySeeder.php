<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farms_activities')->insert([
            [
                'id_farm' => 1,
                'id_activity' => 13
            ],
            [
                'id_farm' => 1,
                'id_activity' => 11
            ],
            [
                'id_farm' => 2,
                'id_activity' => 11
            ],
            [
                'id_farm' => 1,
                'id_activity' => 1
            ],
            [
                'id_farm' => 7,
                'id_activity' => 9
            ],
            [
                'id_farm' => 7,
                'id_activity' => 6
            ],
            [
                'id_farm' => 4,
                'id_activity' => 5
            ],
            [
                'id_farm' => 4,
                'id_activity' => 7
            ],
            [
                'id_farm' => 3,
                'id_activity' => 13
            ],
            [
                'id_farm' => 3,
                'id_activity' => 2
            ],
            [
                'id_farm' => 3,
                'id_activity' => 3
            ],
            [
                'id_farm' => 5,
                'id_activity' => 8
            ],
            [
                'id_farm' => 5,
                'id_activity' => 15
            ],
            [
                'id_farm' => 6,
                'id_activity' => 4
            ],
            [
                'id_farm' => 6,
                'id_activity' => 7
            ],
            [
                'id_farm' => 6,
                'id_activity' => 10
            ],
            [
                'id_farm' => 3,
                'id_activity' => 12
            ],
            [
                'id_farm' => 2,
                'id_activity' => 14
            ],
            [
                'id_farm' => 6,
                'id_activity' => 16
            ],
            [
                'id_farm' => 5,
                'id_activity' => 17
            ],
        ]);
    }
}
