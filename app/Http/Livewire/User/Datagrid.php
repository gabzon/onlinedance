<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Datagrid extends Component
{
    use WithPagination;

    public $search;
    public $active;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user.datagrid',[
            'users' => User::where(function($query){
                $query->where('name','LIKE', "%{$this->search}%")->orWhere('email','LIKE', "%{$this->search}%");
            })->paginate(10)
        ]);
    }
}