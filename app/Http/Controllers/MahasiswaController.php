<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.create', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'nim' => 'required|unique:mahasiswa',
            'nama' => 'required',
            'alamat' => 'required',
            'hobi' => 'required',
        ],[
            'nim.unique' => "NIM sudah ada."
        ],[
            'required' => "Data tidak lengkap."
        ], );

        Mahasiswa::create([
            'nim' => request('nim'),
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'hobi' => request('hobi')
        ]);

        return redirect()->back();
    }
}
