<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseCard extends Component
{
    public $course;

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

    public function mount($course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course-card');
    }
}
