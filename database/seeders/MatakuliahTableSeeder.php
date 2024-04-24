<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('matakuliah')->insert([
            ['kode_mk' => 'svpl_001', 'nama_mk' => 'database', 'sks' => 2],
            ['kode_mk' => 'svpl_002', 'nama_mk' => 'kecerdasan artifisial', 'sks' => 2],
            ['kode_mk' => 'svpl_003', 'nama_mk' => 'interoperabilitas', 'sks' => 2],
        ]);
    }
}
