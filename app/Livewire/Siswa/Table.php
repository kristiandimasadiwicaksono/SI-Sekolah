<?php

namespace App\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class Table extends Component
{   
    public $siswa = [];

    public function mount() {
        $this->siswa = Siswa::all();
    }

    public function render()
    {
        return view('livewire.siswa.table');
    }
}
