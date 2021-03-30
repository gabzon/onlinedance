<section aria-labelledby="settings_billing_options">
    <form wire:submit.prevent="set">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2 id="payment_details_heading" class="text-lg leading-6 font-medium text-gray-900">
                        Billing options
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">Update your social information. Please note this links will
                        display at the footer of the website</p>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="plan_name" class="block text-sm font-medium text-gray-700">Plan name</label>
                        <input type="text" wire:model="plan_name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-1">
                        <label for="trail_days" class="block text-sm font-medium text-gray-700">Days of trials</label>
                        <input type="number" wire:model="trail_days"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-3 sm:col-span-1">
                        <label for="yearly_price" class="block text-sm font-medium text-gray-700">Yearly Price</label>
                        <input type="number" wire:model="yearly_price" step=".01"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-3 sm:col-span-1">
                        <label for="monthly_price" class="block text-sm font-medium text-gray-700">Monthly Price</label>
                        <input type="number" wire:model="monthly_price" step=".01"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-3 sm:col-span-1">
                        <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
                        <select wire:model="currency"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">Select</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                            <option value="CHF">CHF</option>
                        </select>
                    </div>

                    {{-- <div class="col-span-3 sm:col-span-2">
                        <label for="payment_gateway" class="block text-sm font-medium text-gray-700">Payment
                            Gateway</label>
                        <select wire:model="payment_gateway"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">Select</option>
                            <option value="stripe">Stripe</option>
                            <option value="mollie">Mollie</option>
                        </select>
                    </div> --}}
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <div class="flex justify-between items-center">
                    <div>
                        @if (session()->has('success'))
                        <span x-data="{show:true}" x-show="show" x-init="setTimeout( () => show = false, 3000)"
                            class="text-green-600 text-sm">{{ session()->get('success') }}</span>
                        @endif
                    </div>
                    <button type="submit"
                        class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>