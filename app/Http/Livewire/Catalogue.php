<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Course;

class Catalogue extends Component
{
    public $level;
    public $style;
    public $type;    
    public $courses;

    public function loadCourses()
    {
        $this->courses = Course::style($this->style)->level($this->level)->type($this->type)->get();
    }

    public function updatedStyle($value)
    {
        $this->style = $value;
        $this->loadCourses();
    }

    public function updatedLevel($value)
    {
        $this->level = $value;
        $this->loadCourses();
    }

    public function updatedType($value)
    {
        $this->type = $value;
        $this->loadCourses();
    }

    public function mount()
    {
        $this->loadCourses();
    }
    
    public function render()
    {
        return view('livewire.catalogue');
    }
}
