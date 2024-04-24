<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerkuliahanTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('perkuliahan')->insert([
            ['id_perkuliahan' => 1, 'nim' => 'sv_001', 'kode_mk' => 'svpl_001', 'nilai' => 90],
            ['id_perkuliahan' => 2, 'nim' => 'sv_001', 'kode_mk' => 'svpl_002', 'nilai' => 87],
            ['id_perkuliahan' => 3, 'nim' => 'sv_001', 'kode_mk' => 'svpl_003', 'nilai' => 88],
            ['id_perkuliahan' => 4, 'nim' => 'sv_002', 'kode_mk' => 'svpl_001', 'nilai' => 98],
            ['id_perkuliahan' => 5, 'nim' => 'sv_002', 'kode_mk' => 'svpl_002', 'nilai' => 77],
        ]);
    }
}