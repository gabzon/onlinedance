<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;

class Datagrid extends Component
{    
    public $styles;

    public function mount()
    {
        $this->styles = Style::all();
    }

    public function render()
    {
        return view('livewire.style.datagrid');
    }
}
