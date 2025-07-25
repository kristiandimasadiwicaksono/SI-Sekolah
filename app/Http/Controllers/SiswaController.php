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

    public function edit($id) {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        
        return view('homepage.siswa.edit', compact('siswa', 'kelas'));
    }

    public function update (Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|unique:siswa,nama,' . $id,
            'nis' => 'required|numeric|unique:siswa,nis,' . $id,
            'id_kelas' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
