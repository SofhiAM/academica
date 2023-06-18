<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DecanosSeeder extends Seeder
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
                'coddecano' => '01',
                'nomdecano' => 'Juan Perez',
                'facultad' => '01'
            ],
            [
                'coddecano' => '02',
                'nomdecano' => 'Pedro Perez ',
                'facultad' => '02'
            ],
            [
                'coddecano' => '03',
                'nomdecano' => 'Maria Pascual',
                'facultad' => '03'
            ],
            [
                'coddecano' => '04',
                'nomdecano' => 'Luis Castro',
                'facultad' => '04'
            ],
            [
                'coddecano' => '05',
                'nomdecano' => 'Ana Cardenas',
                'facultad' => '05'
            ]
            ];
            DB::table('decanos')->insert($datos);
    }
}
