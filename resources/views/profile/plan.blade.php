<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-">
            {{ __('Plan') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


            <div class="mt-10 sm:mt-0">
                <livewire:profile.subscription-mollie />
            </div>

            <x-jet-section-border />


            <div class="mt-10 sm:mt-0">
                <x-profile.billing-history />
            </div>
            {{-- @if (auth()->user()->subscribed('OnlineClass'))
            @endif --}}

        </div>
    </div>
</x-app-layout>