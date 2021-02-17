<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-">
            {{ __('To-dos') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 -mx-4">
                @forelse (auth()->user()->todos as $course)
                <livewire:course-card :course="$course" />
                @empty
                <div>No todos courses selected</div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>