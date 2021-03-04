<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome.landing />
                {{ route('thank-you') }}
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="styles" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome.styles />
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="instructors" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-partials.instructors />
            </div>
        </div>
    </div>

    <div class="pt-12">
        <div id="pricing" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-welcome.pricing />
        </div>
    </div>
</x-guest-layout>