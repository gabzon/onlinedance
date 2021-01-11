<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;

class Datagrid extends Component
{
    public $courses;

    public function mount()
    {
        $this->courses = Course::all();
    }

    public function render()
    {
        return view('livewire.course.datagrid');
    }
}
