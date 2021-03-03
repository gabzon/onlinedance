<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class SubscriptionMollie extends Component
{
    

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

    public function render()
    {
        return view('livewire.profile.subscription-mollie');
    }
}
