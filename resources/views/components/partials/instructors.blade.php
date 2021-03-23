<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Instructors</h2>
                <p class="text-xl text-gray-500">Nulla quam felis, enim faucibus proin velit, ornare id pretium. Augue
                    ultrices sed arcu condimentum vestibulum suspendisse. Volutpat eu faucibus vivamus eget bibendum
                    cras.</p>
            </div>
            <div class="lg:col-span-2">
                <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                    @foreach ($instructors as $teacher)
                    <li>
                        <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-4">
                                <div class="bg-cover bg-center object-fill w-full rounded-lg shadow"
                                    style="background-image: url({{ asset($teacher->portrait) }})">
                                    <div class="absolute bottom-0.5 pl-5 pb-2">
                                        <span
                                            class="bg-blue-700 py-1 px-2 text-white text-xl font-bold dark:bg-red-700">
                                            {{ $teacher->first_name}} {{ $teacher->last_name}}
                                        </span>
                                        <p class="text-blue-700 font-semibold pl-2 dark:text-red-700">
                                            @foreach ($teacher->styles as $s)
                                            {{ $s->name }}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @if ($desc)
                            <div class="mx-2">
                                <div class="text-lg">
                                    <p class="text-gray-500">
                                        {!! $teacher->bio !!}
                                    </p>
                                </div>

                                <ul class="flex space-x-5 mt-3">
                                    @if ($teacher->facebook)
                                    <li>
                                        <a href="{{ $teacher->facebook }}" target="_blank"
                                            class="text-gray-400 hover:text-gray-500">
                                            @include('icons.facebook')
                                        </a>
                                    </li>
                                    @endif
                                    @if ($teacher->instagram)
                                    <li>
                                        <a href="{{ $teacher->instagram }}" target="_blank"
                                            class="text-gray-400 hover:text-gray-500">
                                            @include('icons.instagram')
                                        </a>
                                    </li>
                                    @endif
                                    @if ($teacher->twitter)
                                    <li>
                                        <a href="{{ $teacher->twitter }}" target="_blank"
                                            class="text-gray-400 hover:text-gray-500">
                                            @include('icons.twitter')
                                        </a>
                                    </li>
                                    @endif
                                    @if ($teacher->youtube)
                                    <li>
                                        <a href="{{ $teacher->youtube }}" target="_blank"
                                            class="text-gray-400 hover:text-gray-500">
                                            @include('icons.youtube')
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>

                @if ($qty == 8)
                <div class="my-10 flex justify-center">
                    <a href="{{ route('instructors') }}"
                        class="inline-flex items-center px-4 py-2 border relative border-gray-300 shadow-sm text-sm font-medium rounded-md
                    text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Show
                        all</a>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>