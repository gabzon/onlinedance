<?php

namespace App\View\Components\Profile;

use Illuminate\View\Component;

class BillingHistory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profile.billing-history', ['invoices' => auth()->user()->invoices()]);
    }
}
