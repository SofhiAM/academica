<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DeptosSeeder extends Seeder
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
                'coddepto'=> '01',
                'nomdepto' => 'Nariño'
            ],
            [
                'coddepto'=> '02',
                'nomdepto' => 'Cauca'
            ],
            [
                'coddepto'=> '03',
                'nomdepto' => 'Antioquia'
            ],
            [
                'coddepto'=> '04',
                'nomdepto' => 'Valle del Cauca'
            ],
            [
                'coddepto'=> '05',
                'nomdepto' => 'Cundinamarca'
            ]
            ];
            DB::table('departamentos')->insert($datos);
    }
}
