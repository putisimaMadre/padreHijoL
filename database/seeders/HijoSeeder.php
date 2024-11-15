<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records=[
            ['nombre' => 'Jorge', 'idPadre' => 1],
            ['nombre' => 'Enrique', 'idPadre' => 1],
            ['nombre' => 'Pedro', 'idPadre' => 2],
            ['nombre' => 'Hugo', 'idPadre' => 3],
        ];
        foreach ($records as $record) {
            DB::table('hijos')->insert($record);
       }
    }
}
