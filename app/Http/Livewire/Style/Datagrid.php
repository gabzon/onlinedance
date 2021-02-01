<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
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

    public function delete($sid)
    {        
        $style =  Style::findOrFail($sid);
        
        $style->delete();
        
        session()->flash('success', 'Style deleted successfully');
        
        return redirect()->route('style.index');
    }

    public function render()
    {
        return view('livewire.style.datagrid', [
            'styles' => Style::where('name','LIKE', "%{$this->search}%")->paginate(10)
        ]);
    }
}
