<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Instructor;
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

    public function delete($id)
    {        
        $instructor =  Instructor::findOrFail($id);
        $instructor->delete();
        
        session()->flash('success', 'Instructor deleted successfully');
        
        return redirect()->route('course.index');
    }

    public function render()
    {
        return view('livewire.instructor.datagrid', [
            'instructors' => Instructor::where('first_name','LIKE', "%{$this->search}%")
                                        ->orWhere('last_name','LIKE', "%{$this->search}%")
                                        ->paginate(10)
        ]);
    }
}