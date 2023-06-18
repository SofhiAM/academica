<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codprofesor' => '01',
                'nomprofesor' => 'Juan Perez',
                'catprofesor' => 'cat A'
            ],
            [
                'codprofesor' => '02',
                'nomprofesor' => 'Pedro Perez ',
                'catprofesor' => 'cat A'
            ],
            [
                'codprofesor' => '03',
                'nomprofesor' => 'Maria Pascual',
                'catprofesor' => 'cat C'
            ],
            [
                'codprofesor' => '04',
                'nomprofesor' => 'Luis Castro',
                'catprofesor' => 'cat B'
            ],
            [
                'codprofesor' => '05',
                'nomprofesor' => 'Ana Cardenas',
                'catprofesor' => 'cat C'
            ]
            ];
            DB::table('profesores')->insert($datos);
    }
}
