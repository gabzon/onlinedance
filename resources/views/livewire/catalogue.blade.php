<section id="catalogue" class="mx-3 sm:mx-0">
    <div id="filters" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-5">
        <div>
            <select wire:model="style"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                <option value="">All Styles</option>
                @foreach (\App\Models\Style::all() as $style)
                <option value="{{ $style->id }}">{{ $style->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select wire:model="level"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                <option value="">All levels</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
                <option value="pro">Pro</option>
            </select>
            {{-- {{ $level }} --}}
        </div>

        <div>
            <select wire:model="type"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                <option value="">All types</option>
                <option value="lady-styling">Lady styling</option>
                <option value="men-styling">Men styling</option>
                <option value="body-movement">Body movements</option>
                <option value="partnerwork">Partnerwork</option>
                <option value="footwork">Footwork</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 -mx-4">
        @forelse ($courses as $course)
        <div
            class="flex flex-col bg-white dark:bg-gray-100 mx-4 rounded-3xl shadow-sm hover:shadow-2xl overflow-hidden mb-3 border">
            <div class="rounded-t-3xl">
                <a href="{{ route('course.show', $course) }}">
                    <img src="{{ asset('storage/'. $course->thumbnail) }}" alt="{{ $course->name }}"
                        class="h-72 w-full object-cover">
                </a>
            </div>
            <div class="px-4 py-4">
                <h3 class="text-xl font-semibold text-gray-700">
                    {{ $course->title }}
                    <span class="text-gray-500 block text-lg">{{ $course->tagline }}</span>
                </h3>
                <div class="flex justify-between mt-1">
                    <span
                        class="inline-flex items-center px-2.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-red-700 dark:text-red-200">
                        {{ $course->level }}
                    </span>
                    @if ($course->is_live)
                    <span
                        class="inline-flex items-center px-2.5 rounded-full text-xs font-medium bg-red-800 text-red-100 dark:bg-red-700 dark:text-red-200">Live</span>
                    @endif
                </div>

                <p class="text-sm text-gray-500 my-2">
                    {{ $course->excerpt }}
                </p>

                <div class="flex items-center">
                    <div class="flex -space-x-2 overflow-hidden">
                        @foreach ($course->instructors as $i)
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="{{ asset('storage/'.$i->avatar)}}" alt="{{ $i->first_name }}">
                        @endforeach
                    </div>
                    <div class="ml-2">
                        @foreach ($course->instructors as $i)
                        @if (!$loop->last)
                        <span class="text-gray-600 text-xs">
                            {{ $i->first_name }}{{ count($course->instructors) == 2 ? ' y':','}}
                        </span>
                        @else
                        <span class="text-gray-600 text-xs">{{ $i->first_name }}</span>
                        @endif
                        @endforeach
                    </div>

                </div>

            </div>
            <footer class="mt-auto px-4 pb-2">
                <div class="flex justify-between">
                    <div>
                        @if ($course->favorited())
                        <button wire:click="unfavorite({{$course->id}})"
                            class="text-blue-500 hover:text-blue-400 dark:text-red-600 dark:hover:text-red-500">
                            @include('icons.heart-fill')
                        </button>
                        @else
                        <button wire:click="favorite({{$course->id}})"
                            class="hover:text-blue-500 dark:hover:text-red-600">
                            @include('icons.heart')
                        </button>
                        @endif
                        @if ($course->bookmarked())
                        <button wire:click="undo({{$course->id}})"
                            class="text-blue-500 hover:text-blue-400 dark:text-red-600 dark:hover:text-red-500 mx-1">
                            @include('icons.bookmark-star-fill')
                        </button>
                        @else
                        <button wire:click="todo({{$course->id}})"
                            class="hover:text-blue-500 dark:hover:text-red-600 mx-1">
                            @include('icons.bookmark-star')
                        </button>
                        @endif
                    </div>
                    <div class="inline-flex items-center">
                        @include('icons.clock')
                        <span class="text-sm ml-2 font-semibold ">{{ rtrim($course->duration,':00') }}</span>
                    </div>
                </div>
            </footer>
        </div>
        {{-- <livewire:course-card :course="$course" :key="$loop->index" /> --}}
        @empty
        <div> no courses available</div>
        @endforelse

    </div>
</section>