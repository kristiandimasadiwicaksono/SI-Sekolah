<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();

        return view('homepage.siswa.index', compact('siswa'));
    }

    public function create() {
        $kelas = Kelas::all();
        return view('homepage.siswa.create', compact('kelas'));
    }
    
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|unique:siswa,nama',
            'nis' => 'required|numeric|unique:siswa,nis',
            'id_kelas' => 'required'
        ]);
        
        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');
    }
}
