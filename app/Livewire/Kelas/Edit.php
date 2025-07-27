<?php

namespace App\Livewire\Kelas;

use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;

class Edit extends Component
{
    public $kelas = [];
    public $guru = [];

    public function mount($id) {
        $this->kelas = Kelas::findOrFail($id);
        $this->guru = Guru::all();
    }

    public function render()
    {
        return view('livewire.kelas.edit');
    }
}
