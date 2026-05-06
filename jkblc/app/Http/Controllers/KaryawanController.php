<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $data_karyawan = Karyawan::all();
        return view('karyawan_index', ['karyawan' => $data_karyawan]);
    }

    public function prosesform(Request $request){
        Karyawan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/karyawan');
    }

    public function tampilform(){
        return view('karyawan.tambah');
    }

    public function updateform(Request $request){
        $karyawan = Karyawan::find($request->id);
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        return redirect('/karyawan');
    }

    public function tampilEditform(string $id){
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function hapusForm(string $id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect('/karyawan');
    }
}