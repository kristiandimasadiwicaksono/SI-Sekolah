<?php

namespace App\Livewire\Kelas;

use App\Models\Kelas;
use Livewire\Component;

class Table extends Component
{
    public $kelas = [];

    public function mount() {
        $this->kelas = Kelas::with('guru')->get();
    }

    public function render()
    {
        return view('livewire.kelas.table');
    }
}
