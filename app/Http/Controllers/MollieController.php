<?php

namespace App\Http\Controllers;

use Laravel\Cashier\SubscriptionBuilder\RedirectToCheckoutResponse;
use Illuminate\Http\Request;

class MollieController extends Controller
{
    public function createSubscription(Request $request)
    {
        // dd($request->all());
        $user = auth()->user();

        $name = 'Online classes';
        
        $plan = $request->plan;
    
        if(!$user->subscribed($name, $plan)) {
    
            $result = $user->newSubscription($name, $plan)
                            ->trialDays(7)
                            ->create();
    
            if(is_a($result, RedirectToCheckoutResponse::class)) {
                return $result; // Redirect to Mollie checkout
            }        
    
            // return redirect('/dashboard')->with('status', 'Welcome to the ' . $plan . ' plan');
            return redirect(route('thank-you'))->with('status', 'Welcome to the ' . $plan . ' plan');
        }
        return redirect(route('thank-you'))->with('status', 'Welcome to the ' . $plan . ' plan');
        // return redirect('/dashboard')->with('status', 'You are already on the ' . $plan . ' plan');
    }

    public function thankyou()
    {
        return view('pages.thank-you');
    }
}
