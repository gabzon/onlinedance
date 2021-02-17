<div
    class="flex flex-col bg-white dark:bg-gray-100 mx-4 rounded-3xl shadow-sm hover:shadow-2xl overflow-hidden mb-3 border dark:hover:border-red-700">
    <div class="rounded-t-3xl">
        <a href="{{ route('course.show', $course) }}">
            <img src="{{ asset($course->thumbnail) }}" alt="{{ $course->name }}" class="h-72 object-cover">
        </a>
    </div>
    <div class="px-4 py-4">
        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
            {{ $course->title }}
        </h3>
        <span
            class="inline-flex items-center px-2.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-red-700 dark:text-red-200">
            {{ $course->level }}
        </span>
        <p class="text-sm text-gray-500 my-2 dark:text-gray-300">
            {{ $course->excerpt }}
        </p>
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
                    class="hover:text-blue-500 dark:text-white dark:hover:text-red-600">
                    @include('icons.heart')
                </button>
                @endif
                @if ($course->bookmarked())
                <button wire:click="undo({{$course->id}})"
                    class="text-blue-500 hover:text-blue-400 dark:text-red-600 dark:hover:text-red-500 mx-1">
                    @include('icons.bookmark-star-fill')
                </button>
                @else
                <button wire:click="todo({{$course->id}})" class="hover:text-blue-500 dark:hover:text-red-600 mx-1">
                    @include('icons.bookmark-star')
                </button>
                @endif
            </div>
            <div class="inline-flex items-center text-gray-600 dark:text-gray-300">
                @include('icons.clock')
                <span class="text-sm ml-2 font-semibold ">{{ rtrim($course->duration,':00') }}</span>
            </div>
        </div>
    </footer>
</div>