<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $course->title }}
        </h2>
    </x-slot>

    @if (!auth()->user()->subscribed('OnlineClass'))
    <div class="pt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-3xl mt-5">
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


    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden py-8">

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-1">
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4 flex">
                            @foreach ($course->styles as $item)
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">{{ $item->name}}</span>
                            @endforeach
                        </li>

                        <li class="py-4 flex">
                            <div class="inline-flex items-center">
                                @include('icons.clock')
                                <span class="mx-2">{{ $course->duration }}</span>
                            </div>
                        </li>

                        <li class="py-4 flex">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt="">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                                <p class="text-sm text-gray-500">ted.fox@example.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 sm:col-span-3">
                    {!! $course->content !!}
                </div>
            </div>

            <div class="flex justify-between">




            </div>
            <p class="my-5">

            </p>
        </div>
    </div>


</x-app-layout>