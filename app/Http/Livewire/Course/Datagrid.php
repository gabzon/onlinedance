<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Datagrid extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($cid)
    {        
        $course =  Course::findOrFail($cid);
        $course->delete();
        session()->flash('success', 'Course deleted successfully');
        return redirect()->route('course.index');
    }

    public function render()
    {
        return view('livewire.course.datagrid', [
            'courses' => Course::where('title','LIKE', "%{$this->search}%")->paginate(10)
        ]);
    }
}