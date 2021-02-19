<?php

namespace App\View\Components\Partials;

use App\Models\Instructor;
use Illuminate\View\Component;

class Instructors extends Component
{
    public $instructors;
    public $qty;
    public $desc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($qty = 8, $desc = false)
    {        
        $this->desc = $desc;
        if ($qty == 'all') {
            $this->instructors = Instructor::all();
        } else {
            $this->instructors = Instructor::take($qty)->get();
            $this->qty = $qty;
        }   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.instructors');
    }
}
