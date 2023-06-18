<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultadesSeeder extends Seeder
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
                'codfacultad' => '01',
                'nomfacultad' => 'Ingenieria de Sistemas'
            ],
            [
                'codfacultad' => '02',
                'nomfacultad' => 'Ingenieria Industrial'
            ],
            [
                'codfacultad' => '03',
                'nomfacultad' => 'Ingenieria Electronica'
            ],
            [
                'codfacultad' => '04',
                'nomfacultad' => 'Ingenieria Ambiental'
            ],
            [
                'codfacultad' => '05',
                'nomfacultad' => 'Ingenieria Civil'
            ]
            ];
            DB::table('facultades')->insert($datos);
    }
}
