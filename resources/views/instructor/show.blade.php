<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="h-screen flex overflow-hidden bg-white -mt-12" x-data="{ tab: 'profile' }">

        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
            <div class="flex-1 relative z-0 flex overflow-hidden">
                <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last" tabindex="0">
                    <article>
                        <!-- Profile header -->
                        <div>
                            <div>
                                <img class="h-32 w-full object-cover sm:h-44 md:h-56 lg:h-64 xl:h-72"
                                    src="{{ asset($instructor->image) }}" alt="">
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                                    <div class="flex">
                                        <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-36 sm:w-36"
                                            src="{{ asset($instructor->avatar )}}" alt="">
                                    </div>
                                    <div
                                        class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                                        <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                            <h1 class="text-2xl font-bold text-gray-900 truncate">
                                                {{ $instructor->first_name }} {{ $instructor->last_name }}
                                            </h1>
                                        </div>
                                        <div
                                            class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                            @auth
                                            @if (auth()->user()->isAdmin())
                                            <a href="{{ route('instructor.edit', $instructor)}}"
                                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                <span>Edit</span>
                                            </a>
                                            @if ($instructor->email)
                                            <a href="mailto:{{ $instructor->email }}"
                                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                <!-- Heroicon name: mail -->
                                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                </svg>
                                                <span>Message</span>
                                            </a>
                                            @endif
                                            @if ($instructor->phone)
                                            <a href="tel:{{ $instructor->phone }}"
                                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                                <!-- Heroicon name: phone -->
                                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                                <span>Call</span>
                                            </a>
                                            @endif
                                            @endif
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                                    <h1 class="text-2xl font-bold text-gray-900 truncate">
                                        Ricardo Cooper
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="mt-6 sm:mt-2 2xl:mt-5">
                            <div class="border-b border-gray-200">
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                                        <button :class="{ 'border-blue-500 text-blue-600': tab === 'profile' }"
                                            @click="tab = 'profile'"
                                            class="border-blue-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                            aria-current="page">
                                            Profile
                                        </button>

                                        <button :class="{ 'border-blue-500 text-indigo-600': tab === 'courses' }"
                                            @click="tab = 'courses'"
                                            class="border-transparent text-gray-500 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm hover:border-gray-300"
                                            aria-current="page">
                                            Courses
                                        </button>

                                        @if ($instructor->video)
                                        <button :class="{ 'border-blue-500 text-indigo-600': tab === 'video' }"
                                            @click="tab = 'video'"
                                            class="border-transparent text-gray-500 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm hover:border-gray-300"
                                            aria-current="page">
                                            Video
                                        </button>
                                        @endif


                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Description list -->
                        <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-show="tab === 'profile'">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Biography
                                    </dt>
                                    <dd class="mt-1 max-w-prose text-sm text-gray-900">
                                        <p>
                                            {!! $instructor->bio !!}
                                        </p>
                                    </dd>
                                </div>

                                @auth
                                @if (auth()->user()->isAdmin())
                                @if ($instructor->phone)
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Phone
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        @if ( $instructor->phone )
                                        <a href="tel:{{ $instructor->phone }}"
                                            class="text-blue-700">{{ $instructor->phone }}</a>
                                        @endif
                                    </dd>
                                </div>
                                @endif

                                @if ($instructor->email)
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        @if ($instructor->email )
                                        <a href="mailto:{{ $instructor->email }}"
                                            class="text-blue-700">{{ $instructor->email }}</a>
                                        @endif

                                    </dd>
                                </div>
                                @endif

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Birthday
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ Carbon\Carbon::parse($instructor->birthday)->format('F d, Y') }}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Beginning
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ Carbon\Carbon::parse($instructor->beginning)->diffForHumans() }}
                                    </dd>
                                </div>
                                @endif
                                @endauth


                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Social media
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 flex items-center">
                                        @if ($instructor->facebook)
                                        <a href="{{ $instructor->facebook }}"
                                            class="text-gray-500 hover:text-blue-700 mr-2">
                                            @include('icons.facebook')
                                        </a>
                                        @endif

                                        @if ($instructor->instagram)
                                        <a href="{{ $instructor->instagram }}"
                                            class="text-gray-500 hover:text-blue-700 mr-2">
                                            @include('icons.instagram')
                                        </a>
                                        @endif

                                        @if ($instructor->twitter)
                                        <a href="{{ $instructor->twitter }}"
                                            class="text-gray-500 hover:text-blue-700 mr-2">
                                            @include('icons.twitter')
                                        </a>
                                        @endif
                                        @if ($instructor->youtube)
                                        <a href="{{ $instructor->youtube }}"
                                            class="text-gray-500 hover:text-blue-700 mr-2">
                                            @include('icons.youtube')
                                        </a>
                                        @endif
                                        @if ($instructor->tiktok)
                                        <a href="{{ $instructor->tiktok }}"
                                            class="text-gray-500 hover:text-blue-700 mr-2">
                                            tiktok
                                        </a>
                                        @endif
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Styles
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 flex items-center">
                                        @foreach ($instructor->styles as $s)
                                        @if (!$loop->last)
                                        {{ $s->name }},
                                        @else
                                        {{ $s->name }}
                                        @endif
                                        @endforeach
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-show="tab === 'courses'">
                            courses
                        </div>
                        <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-show="tab === 'video'">
                            {!! $instructor->video !!}
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>