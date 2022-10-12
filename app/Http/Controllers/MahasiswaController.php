<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function hitungUmur($tahun_lahir)
    {
        $tahun_sekarang = date('Y');
        $tahun_lahir = date('Y', strtotime($tahun_lahir));
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }

    public function index()
    {
        session()->remove('mahasiswa');
        $title = 'Form Mahasiswa';
        return view('index', compact('title'));
    }


    public function viewMahasiswa()
    {
        // make a colection from data
        $mahasiswa = collect(session('mahasiswa')[0]);
        $title = 'Data Mahasiswa';
        return view('mahasiswa.index', compact('mahasiswa', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'hobbi' => 'required',
        ]);

        $umur = $this->hitungUmur($request->tanggal_lahir);

        $data = [
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
            'hobbi' => $request->hobbi,
            'umur' => $umur,
        ];

        session()->push('mahasiswa', $data);

        return redirect()->route('mahasiswa');
    }
}
