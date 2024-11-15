<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PadreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records=[
            ['nombre' => 'Jorge', 'ocupacion' => 'Profesor'],
            ['nombre' => 'Luis', 'ocupacion' => 'Abarrotero'],
            ['nombre' => 'Rosa', 'ocupacion' => 'Secretaria'],
        ];
        foreach ($records as $record) {
            DB::table('padres')->insert($record);
       }
    }
}
