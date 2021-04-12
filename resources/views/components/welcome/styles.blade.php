<div id="styles" class="bg-white">
    <div class="text-center">
        <h2 class="mt-1 text-2xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-4xl py-6">
            @if (config('services.school.name') == 'dancefloor')
            Enjoy A Variety Of <span class="text-blue-600 dark:text-red-600">styles</span> !
            @else
            Most popular <span class="text-blue-600 dark:text-red-600">styles</span> on the dancefloor
            @endif
        </h2>
        <p class="text-lg text-gray-500">Improve your foundations, body movement, musicality & learn how to fusion
            styles!</p>
    </div>
    <div class="mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-6">
        <div class="grid grid-cols-6 gap-5">
            @forelse ($styles as $item)
            <div class="col-span-6 sm:col-span-3 md:col-span-2">
                <div class="bg-cover bg-center h-48 rounded-lg overflow-hidden"
                    style="background-image: url({{ asset('storage/'. $item->thumbnail) }});">
                    <div class="w-full h-full bg-opacity-25 bg-black flex justify-center items-center">
                        <div class="text-white">
                            <h3
                                class="font-bold text-2xl md:text-3xl mb-4 leading-8 sm:leading-9 md:leading-10 text-shadow">
                                {{ $item->name }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div></div>
            @endforelse
        </div>
    </div>
</div>