<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Faq extends Component
{
    public $settings;
    public $faq;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update(['faq' => $this->faq ]);            
        }else{
            Setting::create([ 'faq'  => $this->faq ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {                        
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->faq     = $this->settings->faq;    
        }
    }

    public function render()
    {
        return view('livewire.settings.faq');
    }
}
