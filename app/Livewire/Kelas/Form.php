<?php

namespace App\Livewire\Kelas;

use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;

class Form extends Component
{
    public $kelas = [];
    public $guru = [];

    public function mount(){
        $this->kelas = Kelas::all();
        $this->guru = Guru::all();
    }

    public function render()
    {
        return view('livewire.kelas.form');
    }
}
