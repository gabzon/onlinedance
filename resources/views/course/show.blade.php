<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $course->title }}
        </h2>
    </x-slot>

    @if (!auth()->user()->subscribed('OnlineClass'))
    <div class="pt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden py-8">
                {!! $course->video !!}
            </div>
        </div>
    </div>
    @endif

    @if (auth()->user()->subscribed('OnlineClass'))
    <div class="pt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden py-8">
                {!! $course->playlist !!}
            </div>
        </div>
    </div>
    @endif


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden py-8">
            {!! $course->content !!}
        </div>
    </div>


</x-app-layout>