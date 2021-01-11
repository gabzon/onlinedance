<section id="stripe-form">
    <form action="{{ route('subscribe.post') }}" method="post" id="payment-form" data-secret="{{ $intent }}">
        @csrf
        <div class="w-2/3 form-row">
            <fieldset>
                <div>
                    <legend class="text-base font-medium text-gray-900">
                        Choose an option
                    </legend>
                    <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.
                    </p>
                </div>
                <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                        <input id="monthly" name="plan" type="radio" value="price_1I8OSgEEcXvFLoP1DyAOALjS"
                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="monthly" class="ml-3 block text-sm font-medium text-gray-700">
                            $20 per month
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input id="yearly" name="plan" type="radio" value="price_1I8OSgEEcXvFLoP1Eo3NqJWI"
                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="yearly" class="ml-3 block text-sm font-medium text-gray-700">
                            $200 per year
                        </label>
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="cardholder-name" class="text-base font-medium text-gray-900">Cardholder name</label>
                    <input type="text" id="cardholder-name"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-100 rounded-md">
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