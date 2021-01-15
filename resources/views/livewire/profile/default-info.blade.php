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
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <fieldset class="mb-6">
                            <div>
                                <legend class="block text-sm font-medium text-gray-700">Gender</legend>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input id="male" name="gender" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="push_everything" class="ml-3 block text-sm text-gray-700">
                                        Male
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="female" name="gender" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="push_email" class="ml-3 block text-sm text-gray-700">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Biography
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="about" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm rounded-md"
                                        placeholder="you@example.com"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your profile. URLs are hyperlinked.
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">
                                    Phone
                                </label>
                                <input type="text" name="phone" id="phone" autocomplete="phone"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                                <input type="date" name="birthday" id="birthday" autocomplete="birthday"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>
                        </div>
                        @if (auth()->user()->isAdmin())
                        <fieldset class="my-6">
                            <div>
                                <legend class="block text-sm font-medium text-gray-700">Role</legend>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input id="admin" name="role" type="checkbox"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="admin" class="ml-3 block text-sm text-gray-700">
                                        Admin
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        @endif
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button class="ml-4">
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>