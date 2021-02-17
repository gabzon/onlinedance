<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-">
            {{ __('Plan') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            @if (auth()->user()->subscribed('OnlineClass'))
            <div class="mt-10 sm:mt-0">
                <livewire:profile.subscription-plan />
            </div>

            <x-jet-section-border />


            <div class="mt-10 sm:mt-0">
                <x-profile.billing-history />
            </div>

            @endif

        </div>
    </div>
</x-app-layout>