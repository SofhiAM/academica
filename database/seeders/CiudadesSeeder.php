<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
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
                'codciudad'=> 'CD001', 
                'nomciudad'=> 'Pasto',
                'departamento'=> '01'
            ],
            [
                'codciudad'=> 'CD002', 
                'nomciudad'=> 'Popayan',
                'departamento'=> '02'
            ],
            [
                'codciudad'=> 'CD003', 
                'nomciudad'=> 'Medellin',
                'departamento'=> '03'
            ],
            [
                'codciudad'=> 'CD004', 
                'nomciudad'=> 'Cali',
                'departamento'=> '04'
            ],
            [
                'codciudad'=> 'CD005', 
                'nomciudad'=> 'Bogota',
                'departamento'=> '05'
            ]
            ];
            DB::table('ciudades')->insert($datos);
    }
}
