<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:items-center sm:justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight leading-6">
                {{ __('New Instructor') }}
            </h2>
            <div class="mt-3 sm:mt-0 sm:ml-4">

            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:instructor.form />
        </div>
    </div>
</x-app-layout>