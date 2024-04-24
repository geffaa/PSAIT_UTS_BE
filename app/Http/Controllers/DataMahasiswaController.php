<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\Perkuliahan;
use Database\Seeders\MatakuliahTableSeeder;

class DataMahasiswaController extends Controller
{

    public function index()
    {
        return Perkuliahan::with('mahasiswa', 'matakuliah')->get()->map(function ($Perkuliahan) {
            return [
                'id_perkuliahan' => $Perkuliahan->id_perkuliahan,
                'nim' => $Perkuliahan->nim,
                'nama' => $Perkuliahan->mahasiswa->nama,
                'alamat' => $Perkuliahan->mahasiswa->alamat,
                'tanggal_lahir' => $Perkuliahan->mahasiswa->tanggal_lahir,
                'kode_mk' => $Perkuliahan->kode_mk,
                'nama_mk' => $Perkuliahan->matakuliah->nama_mk,
                'sks' => $Perkuliahan->matakuliah->sks,
                'nilai' => $Perkuliahan->nilai,
            ];
        });
    }


    public function show($nim)
    {
        // Menampilkan nilai mahasiswa tertentu (berdasarkan parameter nim)
        $perkuliahan = Perkuliahan::where('nim', $nim)->with('mahasiswa', 'matakuliah')->get()->map(function ($Perkuliahan) {
            return [
                'id_perkuliahan' => $Perkuliahan->id_perkuliahan,
                'nim' => $Perkuliahan->nim,
                'nama' => $Perkuliahan->mahasiswa->nama,
                'alamat' => $Perkuliahan->mahasiswa->alamat,
                'tanggal_lahir' => $Perkuliahan->mahasiswa->tanggal_lahir,
                'kode_mk' => $Perkuliahan->kode_mk,
                'nama_mk' => $Perkuliahan->matakuliah->nama_mk,
                'sks' => $Perkuliahan->matakuliah->sks,
                'nilai' => $Perkuliahan->nilai,
            ];
        });
    
        if ($perkuliahan->isEmpty()) {
            return response()->json([
                'message' => 'Mahasiswa not found',
            ], 404);
        }
    
        return $perkuliahan;
    }


    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10',
            'kode_mk' => 'required|string|max:10',
            'nilai' => 'required|numeric',
        ]);

        $nilai_mahasiswa = Perkuliahan::create($request->all());
        return response()->json($nilai_mahasiswa, 201);
    }


    public function update(Request $request, $nim, $kode_mk)
    {
        // Mengupdate nilai (berdasarkan parameter nim dan kode_mk)
        $perkuliahan = Perkuliahan::where('nim', $nim)->where('kode_mk', $kode_mk)->first();
        if ($perkuliahan) {
            $perkuliahan->nilai = $request->nilai;
            $perkuliahan->save();
            return response()->json($perkuliahan);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }

    public function destroy($nim, $kode_mk)
    {
        // Menghapus nilai (berdasarkan parameter nim dan kode_mk)
        $perkuliahan = Perkuliahan::where('nim', $nim)->where('kode_mk', $kode_mk)->first();
        if ($perkuliahan) {
            $perkuliahan->delete();
            return response()->json(['message' => 'Record deleted successfully']);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }
    
}