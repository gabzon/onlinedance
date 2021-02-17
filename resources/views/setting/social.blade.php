<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
                @include('setting._nav')
            </aside>


            <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">


                <livewire:settings.social />

            </div>
        </div>
    </main>
</x-app-layout>