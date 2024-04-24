<?php

use App\Http\Controllers\DataMahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/get-mahasiswa', [DataMahasiswaController::class, 'index']); // a. Menampilkan semua nilai mahasiswa
Route::get('/get-mahasiswa/{nim}', [DataMahasiswaController::class, 'show']); // b. Menampilkan nilai mahasiswa tertentu (berdasarkan parameter nim)
Route::post('/add-mahasiswa', [DataMahasiswaController::class, 'store']); // c. Memasukkan nilai baru untuk mahasiswa tertentu
Route::put('/update-mahasiswa/{nim}/{kode_mk}', [DataMahasiswaController::class, 'update']); // d. Mengupdate nilai (berdasarkan parameter nim dan kode_mk)
Route::delete('/delete-mahasiswa/{nim}/{kode_mk}', [DataMahasiswaController::class, 'destroy']); // e. Menghapus nilai (berdasarkan parameter nim dan kode_mk)
?>