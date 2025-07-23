<?php

namespace App\Livewire;

use App\Models\Home;
use Livewire\Component;

class Table extends Component
{
    public $data = [];

    public function mount() {
        $this->data = Home::all();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
