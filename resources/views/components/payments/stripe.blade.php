<section id="stripe-form">
    <form action="{{ route('subscribe.post') }}" method="post" id="payment-form" data-secret="{{ $intent }}">
        @csrf
        <div class="form-row">
            <fieldset x-data="{ monthly: false, yearly: false, plan:'', price:'' }" class="mb-5">
                <legend class="text-gray-800 text-lg font-semibold mb-2">
                    Pricing plans
                </legend>
                <ul class="relative bg-white rounded-md -space-y-px">
                    <li>
                        <div :class="{ 'bg-blue-50 border-blue-200 z-10':monthly, 'border-gray-200':!monthly}"
                            class="relative border rounded-tl-md rounded-tr-md p-4 flex flex-col md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                            <label class="flex items-center text-sm cursor-pointer">
                                <input name="plan" type="radio" @click="{monthly = true, plan='monthly', price='20'}"
                                    @click.away="monthly = false"
                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 cursor-pointer border-gray-300"
                                    aria-describedby="plan-option-pricing-0 plan-option-limit-0"
                                    value="price_1I8OSgEEcXvFLoP1DyAOALjS" id="monthly">
                                <span class="ml-3 font-medium text-gray-900">Monthly</span>
                            </label>
                            <p id="plan-option-pricing-0" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                <span class="font-medium"
                                    :class="{'text-blue-900':monthly, 'text-gray-900':!monthly}">$20 / month</span>
                            </p>
                            <p id="plan-option-limit-0" :class="{'text-blue-700':monthly, 'text-gray-500':!monthly}"
                                class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                7 Days Free trial
                            </p>
                        </div>
                    </li>

                    <li>
                        <div :class="{ 'bg-blue-50 border-blue-200 z-10':yearly, 'border-gray-200':!yearly}"
                            class="relative border border-gray-200 rounded-bl-md rounded-br-md p-4 flex flex-col md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                            <label class="flex items-center text-sm cursor-pointer">
                                <input name="plan" type="radio" @click="{yearly = true, plan='yearly', price='100'}"
                                    @click.away="yearly = false"
                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 cursor-pointer border-gray-300"
                                    aria-describedby="plan-option-pricing-2 plan-option-limit-2"
                                    value="price_1I8OSgEEcXvFLoP1Eo3NqJWI" id="yearly">
                                <span class="ml-3 font-medium text-gray-900">Yearly</span>
                            </label>
                            <p id="plan-option-pricing-2" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">

                                <!-- On: "text-blue-900", Off: "text-gray-900" -->
                                <span class="font-medium"
                                    :class="{'text-blue-900':yearly, 'text-gray-900':!yearly}">$100 / year</span>
                                <!-- On: "text-blue-700", Off: "text-gray-500" -->
                            </p>

                            <p id="plan-option-limit-2" :class="{'text-blue-700':yearly, 'text-gray-500':!yearly}"
                                class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                <span class="line-through">($240 / year)</span>
                                Save $140
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="mt-4 mb-3" x-show="plan">
                    <div class="w-full rounded my-10 bg-blue-700 text-white flex justify-between py-6 px-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block">Free trail, today you pay</span>
                            </h2>
                            <p class="text-blue-200 text-lg">
                                Pay $<code x-text="price"></code> for the <code x-text="plan"></code> plan in 7 days
                            </p>
                        </div>
                        <div class="text-2xl font-bold">$0</div>
                    </div>
                    <label for="cardholder-name" class="text-base font-medium text-gray-900">Cardholder name</label>
                    <input type="text" id="cardholder-name"
                        class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-100 rounded-md">
                </div>
            </fieldset>

            <label for="card-element" class="text-base font-medium text-gray-900">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>


        <x-jet-button class="mt-4">
            {{ __('Subscribe') }}
        </x-jet-button>
    </form>

    @push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_LAwvuZekD3Up0n9VGM2A4b67');
    
        // Create an instance of Elements.
        var elements = stripe.elements();
    
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
        };
    
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
    
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
        var cardHolderName = document.getElementById('cardholder-name');
        const clientSecret = form.dataset.secret;
    
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
    
            // stripe.createToken(card).then(function(result) {
            //     if (result.error) {
            //     // Inform the user if there was an error.
            //     var errorElement = document.getElementById('card-errors');
            //     errorElement.textContent = result.error.message;
            //     } else {
            //     // Send the token to your server.
            //     stripeTokenHandler(result.token);
            //     }
            // });
    
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );
    
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                // console.log(setupIntent);
                stripeTokenHandler(setupIntent);
            }
        });
    
        // Submit the form with the token ID.
        function stripeTokenHandler(setupIntent) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);
    
            // Submit the form
            form.submit();
        }
    </script>
    @endpush
</section>