<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructors') }}
        </h2>
    </x-slot>

    <div class="bg-blue-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-blue-200 tracking-wide uppercase">skills & passion</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-100 sm:text-5xl sm:tracking-tight lg:text-6xl">World
                    class instructors</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-100">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Debitis deserunt laborum voluptatem dolorum doloremque atque deleniti.</p>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-8">
                <x-partials.instructors qty="all" desc="true" />
            </div>
        </div>
    </div>
</x-app-layout>