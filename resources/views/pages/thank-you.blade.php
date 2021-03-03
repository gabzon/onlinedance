<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Success') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-8">
                Thank you !
                you have successfully signed in for our online classes. Please head to dashboard to start your training
            </div>
        </div>
    </div>
</x-app-layout>