<section id="catalogue" class="mx-3 sm:mx-0">
    <div id="filters" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-5">
        <div>
            <label for="style" class="block text-sm font-medium text-gray-700">Style</label>
            <select wire:model="style"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="">All Styles</option>
                <option value="1">Bachata</option>
                <option value="1">Salsa</option>
                <option value="2">Line Salsa</option>
                <option value="3">Cuban Salsa</option>
                <option value="4">Reggaeton</option>
            </select>
        </div>
        <div>
            <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
            <select wire:model="level"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="">All levels</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
                <option value="pro">Pro</option>
            </select>
        </div>


        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <select wire:model="type"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="">All types</option>
                <option value="lady-styling">Lady styling</option>
                <option value="men-styling">Men styling</option>
                <option value="body-movement">Body movements</option>
                <option value="partnerwork">Partnerwork</option>
                <option value="footwork">Footwork</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 -mx-4">
        @forelse ($courses as $course)

        <a href="{{ route('course.show', $course) }}">
            <div class="bg-white mx-4 rounded-3xl shadow-sm hover:shadow-2xl overflow-hidden mb-3">
                <div class="rounded-t-3xl">
                    <img src="{{ $course->image }}" alt="">
                </div>
                <div class="px-4 py-4">
                    <h3 class="text-xl font-semibold text-gray-700">
                        {{ $course->title }}
                    </h3>
                    <p class="text-sm text-gray-500 my-2">
                        {{ $course->excerpt }}
                    </p>
                    <div class="flex justify-between">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                            {{ $course->level }}
                        </span>
                        <div class="inline-flex items-center text-gray-600">
                            @include('icons.clock')
                            <span class="text-sm ml-2 font-semibold ">{{ rtrim($course->duration,':00') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </a>

        @empty
        <div> no courses available</div>
        @endforelse

    </div>
</section>