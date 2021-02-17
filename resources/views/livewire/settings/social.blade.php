<section aria-labelledby="payment_details_heading">
    <form wire:submit.prevent="set">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2 id="payment_details_heading" class="text-lg leading-6 font-medium text-gray-900">
                        Social links</h2>
                    <p class="mt-1 text-sm text-gray-500">Update your social information. Please note this links will
                        display at the footer of the website</p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-6">
                    <div class="col-span-4 sm:col-span-2">
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="url" wire:model="facebook"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="url" wire:model="instagram"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                        <input type="url" wire:model="twitter"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <label for="youtube" class="block text-sm font-medium text-gray-700">Youtube</label>
                        <input type="url" wire:model="youtube"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <label for="tiktok" class="block text-sm font-medium text-gray-700">Tiktok</label>
                        <input type="url" wire:model="tiktok"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <label for="snapchat" class="block text-sm font-medium text-gray-700">Snapchat</label>
                        <input type="url" wire:model="snapchat"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
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