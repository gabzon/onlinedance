<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:items-center sm:justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight leading-6">
                {{ $course->title }}
            </h2>
            <div class="mt-3 sm:mt-0 sm:ml-4">
                @if (auth()->user()->isAdmin())
                <a href="{{ route('course.edit', $course) }}"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit Course
                </a>
                @endif
            </div>
        </div>
    </x-slot>


    <div class="pt-5 bg-blue-900 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden py-8">
                @if (auth()->user()->hasAccess())
                {!! $course->playlist !!}
                @else
                @if ($course->video)
                {!! $course->video !!}
                @else
                <img src="{{ $course->portrait ? asset($course->portrait): asset($course->thumbnail)}}" alt="">
                @endif
                @endif
            </div>
        </div>
    </div>



    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden py-8">

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-1">
                    <ul class="divide-y divide-gray-200">
                        @if ($course->tagline)
                        <li class="py-4 flex">
                            {{ $course->tagline }}
                        </li>
                        @endif


                        <li class="py-4 flex">
                            @include('icons.music-genre')
                            @foreach ($course->styles as $item)
                            <span class="ml-2">{{ $item->name}}</span>
                            @endforeach
                        </li>

                        <li class="py-4 flex">
                            <div class="inline-flex items-center">
                                @include('icons.clock')
                                <span class="mx-2">{{ $course->duration }}</span>
                            </div>
                        </li>

                        <li class="py-4 flex items-center">
                            @foreach ($course->instructors as $teacher)
                            <img class="h-8 w-8 rounded-full" src="{{ asset('storage/' . $teacher->avatar) }}" alt="">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">{{ $teacher->first_name }}
                                    {{ $teacher->last_name }}</p>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 sm:col-span-3">
                    {!! $course->content !!}
                    <br>
                    {!! $course->video !!}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>