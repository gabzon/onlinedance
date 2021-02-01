<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Instructor Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Enter or update any data regarding an instructor
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="{{ $action == 'edit' ? 'edit':'add'}}">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" wire:model="first_name" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('first_name') border-red-600 @enderror">
                                @error('first_name')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" wire:model="last_name" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('last_name') border-red-600 @enderror">
                                @error('last_name')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                                <input type="text" wire:model="nickname" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('nickname') border-red-600 @enderror">
                                @error('nickname')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                                <input type="text" wire:model="slug" disabled
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                            </div>

                            <div class="sm:col-span-6">
                                <label for="bio" class="block text-sm font-medium text-gray-700">
                                    Biography
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="bio" rows="4"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Write a full biography.</p>
                            </div>

                            <div class="sm:col-span-6">
                                @isset($instructor->video)
                                <div class="mb-3">
                                    {!! $instructor->video !!}
                                </div>
                                @endisset
                                <label for="video" class="block text-sm font-medium text-gray-700">
                                    Video
                                </label>
                                <div class="mt-1">
                                    <textarea wire:model="video" rows="3"
                                        class="shadow-sm focus:ring-blue-600 focus:border-blue-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Paste the embed code here from Youtube/Vimeo</p>
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="origin" class="block text-sm font-medium text-gray-700">Origin</label>
                                <input type="text" wire:model="origin" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('origin') border-red-600 @enderror">
                                @error('origin')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                                <input type="date" wire:model="birthday"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('birthday') border-red-600 @enderror">
                                @error('birthday')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2">
                                <label for="beginning" class="block text-sm font-medium text-gray-700">Beginning</label>
                                <input type="date" wire:model="beginning" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('beginning') border-red-600 @enderror">
                                @error('beginning')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                                <input type="text" wire:model="facebook" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('facebook') border-red-600 @enderror">
                                @error('facebook')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="instagram" class="block text-sm font-medium text-gray-700">instagram</label>
                                <input type="text" wire:model="instagram" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('instagram') border-red-600 @enderror">
                                @error('instagram')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                                <input type="text" wire:model="twitter" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('twitter') border-red-600 @enderror">
                                @error('twitter')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="tiktok" class="block text-sm font-medium text-gray-700">Tiktok</label>
                                <input type="text" wire:model="tiktok" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('tiktok') border-red-600 @enderror">
                                @error('tiktok')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="youtube" class="block text-sm font-medium text-gray-700">youtube</label>
                                <input type="text" wire:model="youtube" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('youtube') border-red-600 @enderror">
                                @error('youtube')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="phone" class="block text-sm font-medium text-gray-700">phone</label>
                                <input type="text" wire:model="phone" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('phone') border-red-600 @enderror">
                                @error('phone')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                                <input type="text" wire:model="email" autocomplete="title"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('email') border-red-600 @enderror">
                                @error('email')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="grid grid-cols-6 gap-6 pt-6">

                            <div class="col-span-6 sm:col-span-2 mb-1">
                                @isset($image)
                                @isset($action)
                                <img src="{{ asset($instructor->image) }}" class="mb-2">
                                @else
                                <img src="{{ $image->temporaryUrl() }}" class="mb-2">
                                @endisset
                                @endisset
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" wire:model="image">
                                @error('image')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2 mb-1">
                                @isset($thumbnail)
                                @isset($action)
                                <img src="{{ asset($instructor->thumbnail) }}" class="mb-2">
                                @else
                                <img src="{{ asset($thumbnailTemp) }}" class="mb-2">
                                @endisset
                                @endisset
                                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                                <input type="file" wire:model="thumbnail">
                                @error('thumbnail')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6 sm:col-span-2 mb-1">
                                @isset($portrait)
                                @isset($action)
                                <img src="{{ asset($instructor->portrait) }}" class="mb-2">
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