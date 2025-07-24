<?php

namespace App\Http\Controllers;

use App\Models\Guru;
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
}
