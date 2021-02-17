<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Social extends Component
{
    public $settings;
    public $facebook;
    public $instagram;
    public $twitter;
    public $youtube;
    public $tiktok;
    public $snapchat;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([                
                'facebook'  => $this->facebook,
                'instagram' => $this->instagram,
                'twitter'   => $this->twitter,                
                'youtube'   => $this->youtube,
                'tiktok'    => $this->tiktok,
                'snapchat'  => $this->snapchat,
            ]);            
        }else{
            Setting::create([                
                'facebook'  => $this->facebook,
                'instagram' => $this->instagram,
                'twitter'   => $this->twitter,
                'youtube'   => $this->youtube,
                'tiktok'    => $this->tiktok,
                'snapchat'  => $this->snapchat,
            ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {        
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->facebook     = $this->settings->facebook;
            $this->instagram    = $this->settings->instagram;
            $this->twitter      = $this->settings->twitter;            
            $this->youtube      = $this->settings->youtube;
            $this->tiktok       = $this->settings->tiktok;
            $this->snapchat     = $this->settings->snapchat;
        }
    }

    public function render()
    {
        return view('livewire.settings.social');
    }
}


