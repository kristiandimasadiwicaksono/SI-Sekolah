<?php

namespace App\Livewire\Siswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Table extends Component
{   
    public $siswa = [];

    public function mount() {
        $this->siswa = Siswa::with('kelas')->get();
    }

    public function render(){
        return view('livewire.siswa.table');
    }
}
