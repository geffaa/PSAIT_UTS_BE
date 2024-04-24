<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim' => 'sv_001', 'nama' => 'joko', 'alamat' => 'bantul', 'tanggal_lahir' => '1999-12-07'],
            ['nim' => 'sv_002', 'nama' => 'paul', 'alamat' => 'sleman', 'tanggal_lahir' => '2000-10-07'],
            ['nim' => 'sv_003', 'nama' => 'andy', 'alamat' => 'surabaya', 'tanggal_lahir' => '2000-02-07'],
        ]);
    }
}
