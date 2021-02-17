<section aria-labelledby="payment_details_heading">
    <form wire:submit.prevent="set">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2 id="payment_details_heading" class="text-lg leading-6 font-medium text-gray-900">
                        Default settings
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Update your default information. Please note that updating this will affect the general behavior
                        of the website.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-6">
                    <div class="col-span-4 sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" wire:model="email" autocomplete="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4">
                        <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                        <textarea wire:model="about" rows="4"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 pxx-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></textarea>
                    </div>

                    <div class="col-span-4">
                        <label for="theme_mode" class="block text-sm font-medium text-gray-700">Theme mode</label>
                        <div x-data="{enabled: {{$theme_mode}} }" class="flex items-center mt-1">
                            <button type="button" @click="enabled = !enabled" wire:click="enabled"
                                :class="{'bg-indigo-600':enabled,'bg-gray-200':!enabled}"
                                class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                aria-pressed="false">
                                <span class="sr-only">Use setting</span>
                                <span aria-hidden="true" :class="{'translate-x-5':enabled,'translate-x-0':!enabled}"
                                    class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                            <span x-show="enabled == 1" class="ml-3 text-gray-600 text-sm">Dark</span>
                        </div>
                    </div>

                    <div class="col-span-4 sm:col-span-1">
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <input type="file" wire:logo="logo" class="mt-2">
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