<?php

namespace App\Livewire\Siswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Form extends Component
{
    public $siswa = [];
    public $kelas = [];

    public function mount(){
        $this->siswa = Siswa::all();
        $this->kelas = Kelas::all();
    }

    public function render()
    {
        return view('livewire.siswa.form');
    }
}
