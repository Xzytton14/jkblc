<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = "Ligma";
        $mata_kuliah = ["Pemrograman Web", "Basis Data", "Kecerdasan Buatan"];
        
        return view('biodata', ['nama' => $nama, 'mata_kuliah' => $mata_kuliah]);
    }

    // Menambahkan Type Hinting (int) untuk menghilangkan warning P1132
    public function tampilUmur(int $umur)
    {
        return view('umur', ['umur' => $umur]);
    }

    public function tampilForm()
    {
        return view('form_tambah');
    }

    // Menambahkan parameter Request $request agar variabel bisa digunakan
    public function prosesForm(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return view('hasil_form', ['namaMahasiswa' => $nama, 'alamat' => $alamat]);
    }
}