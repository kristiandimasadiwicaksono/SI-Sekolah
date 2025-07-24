<?php

namespace App\Livewire\Guru;

use App\Models\Guru;
use Livewire\Component;

class Table extends Component
{
    public $guru = [];

    public function mount() {
        $this->guru = Guru::get();
    }

    public function render()
    {
        return view('livewire.guru.table');
    }
}
