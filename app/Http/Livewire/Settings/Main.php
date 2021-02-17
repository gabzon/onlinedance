<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Main extends Component
{
    use WithFileUploads;
    
    public $settings;
    public $email;
    public $about;
    public $theme_mode = 0;
    public $logo;

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([
                'email'     => $this->email,
                'about'     => $this->about,
                'logo'      => $this->logo,                
                'theme_mode'=> $this->theme_mode,
            ]);            
        }else{
            Setting::create([
                'email'     => $this->email,
                'about'     => $this->about,
                'logo'      => $this->logo,
                'theme_mode'=> $this->theme_mode,
            ]);
        }

        session()->flash('success','Settings updated!');
    }

    public function enabled()
    {        
        $this->theme_mode = !$this->theme_mode;
    }

    public function mount()
    {
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->email        = $this->settings->email;
            $this->about        = $this->settings->about;
            $this->logo         = $this->settings->logo;            
            $this->theme_mode   = $this->settings->theme_mode;
        }
    }

    public function render()
    {
        return view('livewire.settings.main');
    }
}




