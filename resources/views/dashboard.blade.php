<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('status'))
    <div class="bg-green-600">
        {{ session('status') }}
    </div>
    @endif

    <div class="bg-blue-600 dark:bg-red-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-blue-200 tracking-wide uppercase dark:text-gray-900">
                    Courses
                </h2>
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-100 dark:text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Take control of your dancing skills.
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-200 dark:text-gray-300 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt laborum voluptatem dolorum
                    doloremque atque deleniti.
                </p>
            </div>
        </div>
    </div>

    <div class="py-2 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-8">
                <livewire:catalogue />
            </div>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>