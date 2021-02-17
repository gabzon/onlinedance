<section aria-labelledby="payment_details_heading">
    <form wire:submit.prevent="set">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2 id="payment_details_heading" class="text-lg leading-6 font-medium text-gray-900">
                        Search Engine Optimization
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Update the SEO information. Please note that updating these fields may impact the traffic of the
                        website.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-6">

                    <div class="col-span-4">
                        <label for="fb_pixel" class="block text-sm font-medium text-gray-700">Facebook Pixel</label>
                        <textarea wire:model="fb_pixel" rows="10"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 pxx-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></textarea>
                    </div>

                    <div class="col-span-4">
                        <label for="google_analytics" class="block text-sm font-medium text-gray-700">
                            Google analytics
                        </label>
                        <textarea wire:model="google_analytics" rows="10"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 pxx-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></textarea>
                    </div>

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