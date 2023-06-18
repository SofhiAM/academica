<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegnotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =
        [
            [
                'estudiante' => 'ES01',
                'materia' => '01',
                'profesor' => '01',
                'parcial1' => 4.5,
                'parcial2' => 4.5,
                'efinal' => 4.5,
                'nfinal' => 4.5,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES02',
                'materia' => '02',
                'profesor' => '02',
                'parcial1' => 4.5,
                'parcial2' => 4.5,
                'efinal' => 4.5,
                'nfinal' => 4.5,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES03',
                'materia' => '03',
                'profesor' => '03',
                'parcial1' => 4.5,
                'parcial2' => 4.5,
                'efinal' => 4.5,
                'nfinal' => 4.5,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES04',
                'materia' => '04',
                'profesor' => '04',
                'parcial1' => 4.5,
                'parcial2' => 4.5,
                'efinal' => 4.5,
                'nfinal' => 4.5,
                'estado' => 'A'
            ],
            [
                'estudiante' => 'ES05',
                'materia' => '05',
                'profesor' => '05',
                'parcial1' => 2.8,
                'parcial2' => 1.2,
                'efinal' => 3.0,
                'nfinal' => 2.8,
                'estado' => 'R'
            ]
        ];
        DB::table('regnotas')->insert($datos);
    }
}
