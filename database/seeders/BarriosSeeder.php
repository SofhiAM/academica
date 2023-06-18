<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'codbarrio'=> '001', 
                'nombarrio'=> 'Lorenzo',
                'estbarrio'=> 2,
                'comuna' => 4
            ],
            [
                'codbarrio'=> '002', 
                'nombarrio'=> 'Fatima',
                'estbarrio'=> 3,
                'comuna' => 2
            ],
            [
                'codbarrio'=> '003', 
                'nombarrio'=> 'Mariluz',
                'estbarrio'=> 3,
                'comuna' => 8
            ],
            [
                'codbarrio'=> '004', 
                'nombarrio'=> 'El Pilar',
                'estbarrio'=> 1,
                'comuna' => 5
            ],
            [
                'codbarrio'=> '005', 
                'nombarrio'=> 'Morasurco',
                'estbarrio'=> 5,
                'comuna' => 9
            ]
            ];
            DB::table('barrios')->insert($datos);
    }
}
