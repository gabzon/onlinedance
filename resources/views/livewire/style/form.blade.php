<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Style Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Enter or update any data regarding a style
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'edit' ? 'edit':'add'}}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" wire:model="name" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('name') border-red-600 @enderror">
                                @error('name')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Slug</label>
                                <input type="text" wire:model="slug" disabled
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                            </div>

                            <div class="sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="description" rows="4"
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

                        </div>

                        <div class="grid grid-cols-6 gap-6 pt-6">

                            <div class="col-span-6 sm:col-span-3 mb-1">
                                @isset($thumbnail)
                                @isset($action)
                                <img src="{{ asset($style->thumbnail) }}" class="mb-2">
                                @else
                                <img src="{{ asset($thumbnailTemp) }}" class="mb-2">
                                @endisset
                                @endisset
                                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                                <input type="file" wire:model="thumbnail">
                                @error('thumbnail')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3 mb-1">
                                @isset($portrait)
                                @isset($action)
                                <img src="{{ asset($style->portrait) }}" class="mb-2">
                                @else
                                <img src="{{ asset($portraitTemp) }}" class="mb-2">
                                @endisset
                                @endisset
                                <label for="portrait" class="block text-sm font-medium text-gray-700">Portrait</label>
                                <input type="file" wire:model="portrait">
                                @error('portrait')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                        </div>
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