<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="edit">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        @if ($show)
                        <div class="grid grid-cols-6 gap-6 mb-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Full name
                                </label>
                                <input type="text" wire:model="name" autocomplete="name"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" autocomplete="birthday"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>
                        </div>
                        @endif
                        <fieldset class="mb-6">
                            <div>
                                <legend class="block text-sm font-medium text-gray-700">Gender</legend>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input wire:model="gender" type="radio" value="male"
                                        class="focus:ring-indigo-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="push_everything" class="ml-3 block text-sm text-gray-700">
                                        Male
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model="gender" type="radio" value="female"
                                        class="focus:ring-indigo-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="gender" class="ml-3 block text-sm text-gray-700">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="bio" class="block text-sm font-medium text-gray-700">
                                    Biography
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="bio" rows="3"
                                        class="shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 block w-full sm:text-sm rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your profile. URLs are hyperlinked.
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">
                                    Phone
                                </label>
                                <input type="text" wire:model="phone" autocomplete="phone"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                                <input type="date" wire:model="birthday" autocomplete="birthday"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md @error('birthday') border-red-500 @enderror">
                                <span class="text-gray-500 text-xs ">Format yyyy-mm-dd</span>
                                @error('birthday')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        @if (auth()->user()->isAdmin())
                        <div class="col-span-6 sm:col-span-3 mt-6">
                            <label for="role" class="block text-sm font-medium text-gray-700">
                                Role
                            </label>
                            <select wire:model="role"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="user">User</option>
                                <option value="guest">Guest</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        @endif
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="flex justify-between items-center">
                            <div>
                                @if (session()->has('success'))
                                <span x-data="{show: true}" x-show="show" x-init="setTimeout( () => show = false, 3000)"
                                    class="text-sm text-green-700">
                                    {{ session()->get('success') }}
                                </span>
                                @endif
                            </div>
                            <x-jet-button class="ml-4">
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>