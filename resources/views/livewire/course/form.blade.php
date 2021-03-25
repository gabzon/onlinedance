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
                                    class="mt-1 focus:ring-indigo-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-gray-100">
                            </div>

                            <div class="col-span-6">
                                <label for="tagline" class="block text-sm font-medium text-gray-700">Tagline</label>
                                <input type="text" wire:model="tagline" autocomplete="tagline"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('tagline') border-red-600 @enderror">
                                @error('tagline')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-span-6">
                                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                                <input type="text" wire:model="tags" autocomplete="tags"
                                    class="mt-1 focus:ring-blue-600 focus:border-blue-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  @error('tags') border-red-600 @enderror">
                                @error('tags')<span class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
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

                            <div class="col-span-6" wire:ignore>
                                <label for="instructors"
                                    class="block text-sm font-medium text-gray-700">Instructors</label>
                                <select id="instructors" wire:model="instructors" class="w-full" multiple>
                                    @foreach (\App\Models\Instructor::all() as $instructor)
                                    <option value="{{ $instructor->id }}" @isset($course)
                                        {{ $course->hasInstructor($instructor->id) ? 'selected' : ''}} @endisset>
                                        {{ $instructor->first_name }} {{ $instructor->last_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-span-6" wire:ignore>
                                <label for="styles" class="block text-sm font-medium text-gray-700">Styles</label>
                                <select id="styles" wire:model="styles" class="w-full" multiple>
                                    @foreach (\App\Models\Style::all() as $style)
                                    <option value="{{ $style->id }}" @isset($course)
                                        {{ $course->hasStyle($style->id) ? 'selected' : ''}} @endisset>
                                        {{ $style->name }}
                                    </option>
                                    @endforeach
                                </select>
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

                                @if ($action == 'edit')
                                @isset($thumbnail)
                                <img src="{{ asset($thumbnail) }}" class="mb-2">
                                @endisset
                                @else
                                @if ($thumbnail)
                                <img src="{{ asset($thumbnail) }}" class="mb-2">
                                @endif
                                @endif

                                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                                <input type="file" wire:model="thumbnail">
                                @error('thumbnail')<span
                                    class="text-red-600 text-sm italic">{{ $message }}</span>@enderror
                            </div>

                            {{-- <div class="col-span-6"> --}}

                            {{-- @if ($action == 'edit')
                                @isset($portrait)
                                <img src="{{ asset($portrait) }}" class="mb-2">
                            @endisset
                            @else
                            @if ($portrait)
                            <img src="{{ asset($portrait) }}" class="mb-2">
                            @endif
                            @endif
                            <label for="portrait" class="block text-sm font-medium text-gray-700">Portrait</label>
                            <input type="file" wire:model="portrait">
                            @error('portrait')
                            <span class="text-red-600 text-sm italic">{{ $message }}</span>
                            @enderror --}}
                            {{-- </div> --}}
                        </div>

                        <fieldset class="mt-6">
                            <div class="mt-4 space-y-4">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="premium" type="checkbox"
                                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">is Premium?</label>
                                    </div>
                                </div>
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model="live" type="checkbox"
                                            class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">is Live?</label>
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
    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $("#instructors").select2();
        $('#instructors').on('change', function(){
            @this.instructors = $(this).val()
        });
        $("#styles").select2();
        $('#styles').on('change', function(){
            @this.styles = $(this).val()
        });
    </script>
    @endpush
</div>