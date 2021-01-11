<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Catalogue extends Component
{
    public $level;
    public $style;
    public $type;

    public function render()
    {
        return view('livewire.catalogue', [
           'courses' => Course::style($this->style)->level($this->level)->type($this->type)->get()
        ]);
    }
}
