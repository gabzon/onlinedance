<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class Catalogue extends Component
{
    public $level;
    public $style;
    public $type;    
    public $courses;

    public function favorite($id)
    {    
        Auth::user()->favorites()->attach($id);        
    }

    public function unfavorite($id)
    {
        Auth::user()->favorites()->detach($id); 
    }


    public function todo($id)
    {    
        Auth::user()->todos()->attach($id);        
    }

    public function undo($id)
    {
        Auth::user()->todos()->detach($id); 
    }

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
