<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index() {
        $kelas = Kelas::all();

        return view('homepage.kelas.index', compact('kelas'));
    }

    public function create() {
        $guru = Guru::all();

        return view('homepage.kelas.create', compact('guru'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required|string|unique:kelas,nama_kelas',
            'id_guru' => 'required|unique:guru,id'
        ]);
        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data berhasil ditambahkan');
    }
}
