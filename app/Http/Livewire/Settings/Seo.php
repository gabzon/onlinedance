<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Seo extends Component
{
    public $settings;
    public $fb_pixel;
    public $google_analytics;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([
                'fb_pixel'          => $this->fb_pixel,
                'google_analytics'  => $this->google_analytics,
            ]);            
        }else{
            Setting::create([
                'fb_pixel'          => $this->fb_pixel,
                'google_analytics'  => $this->google_analytics,
            ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {                        
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->google_analytics = $this->settings->google_analytics;
            $this->fb_pixel         = $this->settings->fb_pixel;
        }
    }

    public function render()
    {
        return view('livewire.settings.seo');
    }
}
