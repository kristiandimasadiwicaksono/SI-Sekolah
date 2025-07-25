<?php

namespace App\Livewire\Guru;

use App\Models\Guru;
use Livewire\Component;

class Edit extends Component
{   
    public $guru = [];

    public function mount($id) {
        $this->guru = Guru::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.guru.edit');
    }
}
