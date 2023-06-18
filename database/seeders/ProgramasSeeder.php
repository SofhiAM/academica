<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramasSeeder extends Seeder
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
                'codprograma' => '01',
                'nomprograma' => 'Ingenieria de Sistemas',
                'facultad' => '01'
            ],
            [
                'codprograma' => '02',
                'nomprograma' => 'Ingenieria Industrial',
                'facultad' => '02'
            ],
            [
                'codprograma' => '03',
                'nomprograma' => 'Ingenieria Electronica',
                'facultad' => '03'
            ],
            [
                'codprograma' => '04',
                'nomprograma' => 'Ingenieria Ambiental',
                'facultad' => '04'
            ],
            [
                'codprograma' => '05',
                'nomprograma' => 'Ingenieria Civil',
                'facultad' => '05'
            ]
            ];
            DB::table('programas')->insert($datos);
    }
}
