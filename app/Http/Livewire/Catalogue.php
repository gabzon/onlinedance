<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Course;

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
