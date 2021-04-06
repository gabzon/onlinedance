<section id="mollie-form">
    <form action="{{ route('subscribe.post') }}" method="post" id="payment-form">
        @csrf
        <div class="form-row">
            <fieldset
                x-data="{ monthly: false, yearly: true, plan:'yearly', price:{{ config('settings.yearly_price')}} }"
                class="mb-5">
                <legend class="text-gray-800 text-lg font-semibold mb-2">
                    Pricing plans
                </legend>
                <ul class="relative bg-white rounded-md -space-y-px">
                    <li>
                        <div :class="{ 'bg-blue-50 border-blue-200 z-10 dark:bg-red-50 dark:border-red-200':monthly, 'border-gray-200':!monthly}"
                            class="relative border rounded-tl-md rounded-tr-md p-4 flex flex-col md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                            <label class="flex items-center text-sm cursor-pointer">
                                <input name="plan" type="radio"
                                    @click="{monthly = true, plan='monthly', price={{ config('settings.monthly_price')}}}"
                                    @click.away="monthly = false"
                                    class="focus:ring-blue-500 dark:focus:ring-red-500 h-4 w-4 text-blue-600 dark:text-red-600 cursor-pointer border-gray-300"
                                    aria-describedby="plan-option-pricing-0 plan-option-limit-0" id="monthly"
                                    value="monthly">
                                <span class="ml-3 font-medium text-gray-900">Monthly</span>
                            </label>
                            <p id="plan-option-pricing-0" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                <span class="font-medium"
                                    :class="{'text-blue-900 dark:text-red-900':monthly, 'text-gray-900':!monthly}">
                                    {{ config('settings.currency') == 'EUR' ? '€':'$' }}
                                    {{ config('settings.monthly_price')}} /
                                    month</span>

                            </p>
                            <p id="plan-option-limit-0"
                                :class="{'text-blue-700 dark:text-red-700':monthly, 'text-gray-500':!monthly}"
                                class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                7 Days Free trial
                            </p>
                        </div>
                    </li>

                    <li>
                        <div :class="{ 'bg-blue-50 border-blue-200 z-10 dark:bg-red-50 dark:border-red-200':yearly, 'border-gray-200':!yearly}"
                            class="relative border border-gray-200 rounded-bl-md rounded-br-md p-4 flex flex-col md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                            <label class="flex items-center text-sm cursor-pointer">
                                <input name="plan" type="radio" checked
                                    @click="{yearly = true, plan='yearly', price={{ config('settings.yearly_price')}}}"
                                    @click.away="yearly = false"
                                    class="focus:ring-blue-500 dark:ring-red-50 h-4 w-4 dark:text-red-600 text-blue-600 cursor-pointer border-gray-300"
                                    aria-describedby="plan-option-pricing-2 plan-option-limit-2" value="yearly"
                                    id="yearly">
                                <span class="ml-3 font-medium text-gray-900">Yearly</span>
                            </label>
                            <p id="plan-option-pricing-2" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">

                                <!-- On: "text-blue-900", Off: "text-gray-900" -->
                                <span class="font-medium"
                                    :class="{'text-blue-900 dark:text-red-900':yearly, 'text-gray-900':!yearly}">
                                    {{ config('settings.currency') == 'EUR' ? '€':'$' }}
                                    {{ config('settings.yearly_price')}} /
                                    year</span>
                                <!-- On: "text-blue-700", Off: "text-gray-500" -->
                            </p>

                            <p id="plan-option-limit-2"
                                :class="{'text-blue-700 dark:text-red-700':yearly, 'text-gray-500':!yearly}"
                                class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                <span class="line-through">
                                    ({{ config('services.school.name') == 'dancefloor' ? '€238.9':'$240' }} / year)
                                </span>
                                Save {{ config('services.school.name') == 'dancefloor' ? '€58.0':'$140' }}
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="mt-4 mb-3" x-show="plan">
                    <div
                        class="w-full rounded my-10 bg-blue-700 dark:bg-red-700 text-white flex justify-between py-6 px-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block">Free trail, today you pay</span>
                            </h2>
                            <p class="text-blue-200 text-lg dark:text-red-200">
                                Pay {{ config('settings.currency') == 'EUR' ? '€':'$' }}<code x-text="price"></code> for
                                the <code x-text="plan"></code> plan in 7 days
                            </p>
                        </div>
                        <div class="text-2xl font-bold">$0</div>
                    </div>
                </div>
            </fieldset>
        </div>
        <x-jet-button class="mt-4">
            {{ __('Subscribe') }}
        </x-jet-button>
    </form>
</section>