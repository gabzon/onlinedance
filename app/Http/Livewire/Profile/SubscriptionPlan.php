<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class SubscriptionPlan extends Component
{

    public $plan;

    public function cancelSubscription()
    {
        auth()->user()->subscription('OnlineClass')->cancel();    
        
        session()->flash('success','Your subscribtion has been cancelled successfully.');    
    }

    public function resumeSubscription()
    {
        auth()->user()->subscription('OnlineClass')->resume();
        
        session()->flash('success','Your subscribtion has been resumed successfully.');
    }

    public function mount()
    {
        $this->plan = auth()->user()->subscription('OnlineClass')->stripe_plan;
    }

    public function render()
    {
        return view('livewire.profile.subscription-plan');
    }
}
