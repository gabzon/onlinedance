<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class SubscriptionPlan extends Component
{

    public $plan;

    public function cancelSubscription()
    {
        auth()->user()->subscription('Online classes')->cancel();    
        
        session()->flash('success','Your subscribtion has been cancelled successfully.');    
    }

    public function resumeSubscription()
    {
        auth()->user()->subscription('Online classes')->resume();
        
        session()->flash('success','Your subscribtion has been resumed successfully.');
    }

    public function mount()
    {
        $this->plan = auth()->user()->subscription('Online classes')->stripe_plan;
    }

    public function render()
    {
        return view('livewire.profile.subscription-plan');
    }
}
