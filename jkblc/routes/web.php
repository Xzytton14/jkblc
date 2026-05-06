<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar-route',function(){
    return "Selamat Datang Di Halaman Belajar-Route";
});

Route::match(['get','post'], 'belajar-route', function(){
    return "Ini Halaman balajar-route";
});

Route::redirect('route','new-route');

Route::get('new-route', function() {
    return "Ini Halaman Route Baru";
});

Route::get('/home', function(){
    return view ('home');
});

Route::get('/profile', function(){

    $nama= 'granger';
    $prodi= 'gold lane';
    $kelas= "moniyan empire";

    return view('profile',[
        'nama'=> $nama,
        'prodi'=> $prodi,
        'kelas' => $kelas

        ]);
});

Route::get('/percabangan', function (){
    $umur = 20;
    $nilai = 80;
    return view('percabangan', ['umur' => $umur, 'nilai' => $nilai]);
});

Route::get('/perulangan',function (){
    $produk = ['Laptop','Mouse', 'Keyboard', 'hape'];
    return view('perulangan', ['produk' => $produk]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/umur', [MahasiswaController::class, 'tampilUmur']);

Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tampilForm']);
Route::get('/mahasiswa/proses', [MahasiswaController::class, 'tampilForm']);

// Tampil Data
Route::get('/karyawan', [KaryawanController::class, 'index']);

// Tambah Data
Route::get('/karyawan/tambah', [KaryawanController::class, 'tampilForm']);
Route::post('/karyawan/proses', [KaryawanController::class, 'prosesForm']);

// Update Data
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'updateForm']);
Route::post('/karyawan/update/{id}', [KaryawanController::class, 'updateForm']);

// Hapus Data
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapusForm']);