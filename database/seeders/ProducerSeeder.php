<?php

namespace Database\Seeders;

use DateTime;
use Carbon\Carbon;
use App\Models\Producer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert([
            [
                'name' => 'Carlos Roberto',
                'phone' => '(11)3164-1499',
                'email' => 'carlos_ro@gmail.com.br',
                'document' => '72416239082',
                'type_document' => 1,
                'birthday' => Carbon::createFromFormat('Y-m-d', '2000-03-12'),
            ],
            [
                'name' => 'Camila Sanches',
                'phone' => '(42)99312-8723',
                'email' => 'ca_sanches@gmail.com.br',
                'document' => '06195263001',
                'type_document' => 1,
                'birthday' => Carbon::createFromFormat('Y-m-d', '1992-02-20'),
            ],
            [
                'name' => 'Valter Nobre Neto',
                'phone' => '(19)99764-4691',
                'email' => 'neto_nobre@gmail.com.br',
                'document' => '86849387000170',
                'type_document' => 2,
                'birthday' => Carbon::createFromFormat('Y-m-d', '1988-07-21'),
            ]
        ]);
    }
}
