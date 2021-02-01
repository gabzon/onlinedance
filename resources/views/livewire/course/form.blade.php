<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Course Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Enter or update any data regarding a course
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'edit' ? 'edit':'add'}}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" wire:model="title" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('title') border-red-600 @enderror">
                                @error('title')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Slug</label>
                                <input type="text" wire:model="slug" disabled
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                            </div>

                            <div class="sm:col-span-6">
                                <label for="excerpt" class="block text-sm font-medium text-gray-700">
                                    Excerpt
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="excerpt" rows="2"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Write a few sentences about the course.</p>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="content" class="block text-sm font-medium text-gray-700">
                                    Content
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="content" rows="5"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Write a full description.</p>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="video" class="block text-sm font-medium text-gray-700">
                                    Video
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="video" rows="5"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Paste the embed code here from Youtube/Vimeo</p>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="playlist" class="block text-sm font-medium text-gray-700">
                                    Playlist
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="playlist" rows="5"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Paste the embed code here from Youtube/Vimeo
                                    playlist</p>
                            </div>



                        </div>

                        <div class="grid grid-cols-4 gap-6 pt-6">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                                <select wire:model="level"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advanced">Advanced</option>
                                    <option value="pro">Pro</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                                <select wire:model="type"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="lady-styling">Lady Styling</option>
                                    <option value="men-styling">Men Styling</option>
                                    <option value="footwork">Footwork</option>
                                    <option value="partnerwork">Partnerwork</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                                <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                                <input type="time" wire:model="duration"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                                <label for="order" class="block text-sm font-medium text-gray-700">Order</label>
                                <input type="number" name="order" id="order" autocomplete="order"
                                    class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6">

                                @isset($thumbnail)
                                @isset($action)
                                <img src="{{ asset($course->thumbnail) }}" class="mb-2">
                                @else
                                <img src="{{ asset($thumbnailTemp) }}" class="mb-2">
                                @endisset
                                @endisset


                                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                                <input type="file" wire:model="thumbnail">
                                @error('thumbnail')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="portrait" class="block text-sm font-medium text-gray-700">Portrait</label>
                                <input type="file" wire:model="portrait">
                                @error('portrait')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <fieldset class="mt-6">
                            <div class="mt-4 space-y-4">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="premium" type="checkbox"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">is Premium?</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-jet-button>
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>