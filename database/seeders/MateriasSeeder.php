<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MateriasSeeder extends Seeder
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
                'codmateria' => '01',
                'nommateria' => 'Matematicas',
                'cremateria' => '4'
            ],
            [
                'codmateria' => '02',
                'nommateria' => 'Ingles',
                'cremateria' => '2'
            ],
            [
                'codmateria' => '03',
                'nommateria' => 'Programacion',
                'cremateria' => '5'
            ],
            [
                'codmateria' => '04',
                'nommateria' => 'Base de Datos',
                'cremateria' => '3'
            ],
            [
                'codmateria' => '05',
                'nommateria' => 'Redes',
                'cremateria' => '6'
            ]
            ];
            DB::table('materias')->insert($datos);
    }
}
