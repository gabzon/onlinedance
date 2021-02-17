<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Design extends Component
{
    public $settings;
    public $landing_hero;
    public $dashboard_hero;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([
                'landing_hero'     => $this->landing_hero,
                'dashboard_hero'   => $this->dashboard_hero,
            ]);            
        }else{
            Setting::create([
                'landing_hero'      => $this->landing_hero,
                'dashboard_hero'    => $this->dashboard_hero,
            ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {                        
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->dashboard_hero     = $this->settings->dashboard_hero;
            $this->landing_hero    = $this->settings->landing_hero;
        }
    }

    public function render()
    {
        return view('livewire.settings.design');
    }
}