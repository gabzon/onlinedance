<?php

namespace App\Http\Controllers;

use Laravel\Cashier\SubscriptionBuilder\RedirectToCheckoutResponse;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Http\Request;
use Laravel\Cashier\Order\Order;

class MollieController extends Controller
{
    public function createSubscription(Request $request)
    {
        // dd($request->all());
        // dd(config('settings.trail_days'));
        $user = auth()->user();

        $name = 'Online classes';

        $plan = $request->plan;

        if (!$user->subscribed($name, $plan)) {

            $result = $user->newSubscription($name, $plan)
                // ->trialDays(config('settings.trail_days') ?? 7)
                ->create();

            if (is_a($result, RedirectToCheckoutResponse::class)) {
                return $result; // Redirect to Mollie checkout
            }

            return redirect('thank-you')->with('status', 'Welcome to the ' . $plan . ' plan');
        }

        return redirect(route('thank-you'))->with('status', 'Welcome to the ' . $plan . ' plan');
    }

    public function thankyou(Request $request)
    {

        $order = Order::get()->last();
        if ($order->owner_id === auth()->user()->id) {
            if ($order->mollie_payment_status == 'paid') {
                return view('pages.thank-you');
            }
        }


        return 'Payment failed';
    }
}
