<?php

namespace App\Livewire\Siswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class Edit extends Component
{
    public $siswa = [];
    public $kelas = [];

    public function mount($id){
        $this->siswa = Siswa::findOrFail($id);
        $this->kelas = Kelas::all();
    }
    
    public function render()
    {
        return view('livewire.siswa.edit');
    }
}
