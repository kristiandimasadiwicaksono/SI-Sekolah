<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'id_guru' => 'required|unique:kelas,id_guru'
        ]);
        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $kelas = Kelas::findOrFail($id);

        return view('homepage.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_kelas' => 'required|string|unique:kelas,nama_kelas,' . $id,
            'id_guru' => ['required', 
                        Rule::unique('kelas', 'id_guru')->ignore($id)]
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->id_guru = $request->id_guru;
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Data berhasil diperbarui.');
    }
}
