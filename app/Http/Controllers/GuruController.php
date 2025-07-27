<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {
        return view('homepage.guru.index');
    }

    public function create() {
        $guru = Guru::all();

        return view('homepage.guru.create', compact('guru'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|unique:guru,nama',
            'nip' => 'required|numeric|unique:guru,nip',
            'alamat' => 'required|string',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $guru = Guru::findOrFail($id);

        return view('homepage.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|unique:guru,nama,' . $id,
            'nip' => 'required|numeric|unique:guru,nip,' . $id,
            'alamat' => 'required|string',
        ]);

        $guru = Guru::findOrFail($id);

        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect()->route('guru.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id) {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data berhasil dihapus.');
    }
}
