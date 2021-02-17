<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Terms extends Component
{
    public $settings;
    public $terms;
    public $privacy;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([
                'terms'     => $this->terms,
                'privacy'   => $this->privacy,
            ]);            
        }else{
            Setting::create([
                'terms'     => $this->terms,
                'privacy'   => $this->privacy,
            ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {                
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->privacy     = $this->settings->privacy;
            $this->terms    = $this->settings->terms;
        }
    }
    
    public function render()
    {
        return view('livewire.settings.terms');
    }
}
