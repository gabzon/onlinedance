<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Subscription plan</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Choose the plan that fits your needs the best
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">

                    @if (session()->has('success'))
                    <x-partials.notifications />
                    @endif

                    @php
                    $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                    $pricePlan = $stripe->prices->retrieve($plan,[])->recurring->interval;
                    @endphp


                    @if (auth()->user()->subscribed('Online classes'))
                    <h3 class="text-lg font-medium text-gray-900">
                        <span class="capitalize">{{ $pricePlan }}ly</span> plan -
                        ${{ $pricePlan == 'month' ? '20 / mo' : '100 / yr' }}
                    </h3>

                    @if (auth()->user()->subscription('Online classes')->onGracePeriod())
                    <div class="mt-3 max-w-xl text-sm text-gray-600">
                        <p>
                            {{ __('If you change your mind and you want to continue taking advantage of our online classes just click at the button below') }}
                        </p>
                    </div>
                    <form wire:submit.prevent="resumeSubscription">
                        <x-jet-button route="hola" class="mt-4">
                            {{ __('Resume Subscription') }}
                        </x-jet-button>
                    </form>
                    @else
                    <div class="mt-3 max-w-xl text-sm text-gray-600">
                        <p>
                            {{ __('When a subscription is cancelled, We will automatically set the end date according to your
                            registration date. This will typically allowed to continue using an application until the
                            end of their billing cycle.') }}
                        </p>
                        <br>
                        <p>
                            {{ __('For example, if you cancel your subscription on March 1st, but the subscription was not scheduled to end until March 5th, the subscribed method will continue to work until March 5th.') }}
                        </p>
                    </div>
                    <form wire:submit.prevent="cancelSubscription">
                        <x-jet-button route="hola" class="mt-4">
                            {{ __('Cancel Subscription') }}
                        </x-jet-button>
                    </form>
                    @endif


                    @else
                    <h3 class="text-lg font-medium text-gray-900">
                        Choose a billing plan
                    </h3>
                    <div class="mt-3 max-w-xl text-sm text-gray-600">
                        <p>
                            {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
                        </p>
                    </div>
                    <a href="{{ route('subscribe')}}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Subscribe') }}
                    </a>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>