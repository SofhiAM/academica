<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudiantesSeeder extends Seeder
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
                'codestudiante' => 'ES01',
                'nomestudiante' => 'Juan Perez',
                'edaestudiante' => '21',
                'fechestudiante' => '2000-01-01',
                'sexestudiante' => 'M',
                'ciudad' => 'CD001',
                'barrio' => '001',
                'programa' => '01' 
            ],
            [
                'codestudiante' => 'ES02',
                'nomestudiante' => 'Pedro Perez',
                'edaestudiante' => '22',
                'fechestudiante' => '1999-01-01',
                'sexestudiante' => 'M',
                'ciudad' => 'CD002',
                'barrio' => '002',
                'programa' => '02'
            ],
            [
                'codestudiante' => 'ES03',
                'nomestudiante' => 'Maria Pascual',
                'edaestudiante' => '23',
                'fechestudiante' => '1998-01-01',
                'sexestudiante' => 'F',
                'ciudad' => 'CD003',
                'barrio' => '003',
                'programa' => '03'
            ],
            [
                'codestudiante' => 'ES04',
                'nomestudiante' => 'Luis Castro',
                'edaestudiante' => '24',
                'fechestudiante' => '1997-01-01',
                'sexestudiante' => 'M',
                'ciudad' => 'CD004',
                'barrio' => '004',
                'programa' => '04'
            ],
            [
                'codestudiante' => 'ES05',
                'nomestudiante' => 'Ana Cardenas',
                'edaestudiante' => '25',
                'fechestudiante' => '1996-01-01',
                'sexestudiante' => 'F',
                'ciudad' => 'CD005',
                'barrio' => '005',
                'programa' => '05'
            ]


            ];
            DB::table('estudiantes')->insert($datos);
    }
}
