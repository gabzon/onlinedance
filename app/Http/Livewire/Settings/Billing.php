<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class Billing extends Component
{
    public $settings;
    public $monthly_price;
    public $yearly_price;
    public $plan_name;
    public $trail_days;
    public $payment_gateway = '';
    public $currency = '';

    public function set()
    {
        if ($this->settings) {
            $this->settings->update([                
                'monthly_price'     => $this->monthly_price,
                'yearly_price'      => $this->yearly_price,
                'plan_name'         => $this->plan_name,                
                'trail_days'        => $this->trail_days,
                'payment_gateway'   => $this->payment_gateway,                
                'currency'          => $this->currency,                
            ]);            
        }else{
            Setting::create([                
                'monthly_price'     => $this->monthly_price,
                'yearly_price'      => $this->yearly_price,
                'plan_name'         => $this->plan_name,
                'trail_days'        => $this->trail_days,
                'payment_gateway'   => $this->payment_gateway,
                'currency'          => $this->currency,                
            ]);
        }

        session()->flash('success','Settings updated!');
    }


    public function mount()
    {                
        $this->settings = Setting::first();
        if ($this->settings) {
            $this->monthly_price    = $this->settings->monthly_price;
            $this->yearly_price     = $this->settings->yearly_price;
            $this->plan_name        = $this->settings->plan_name;            
            $this->trail_days       = $this->settings->trail_days;
            $this->payment_gateway  = $this->settings->payment_gateway;  
            $this->currency         = $this->settings->currency;
        }
    }

    public function render()
    {
        return view('livewire.settings.billing');
    }
}
