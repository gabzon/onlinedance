<section id="catalogue">
    <div id="filters" class="mb-5">
        <select wire:model="style">
            <option value="">All Styles</option>
            <option value="1">Bachata</option>
            <option value="1">Salsa</option>
            <option value="2">Line Salsa</option>
            <option value="3">Cuban Salsa</option>
            <option value="4">Reggaeton</option>
        </select>
        <select wire:model="level">
            <option value="">All levels</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
            <option value="pro">Pro</option>
        </select>
        <select wire:model="type">
            <option value="">All types</option>
            <option value="lady-styling">Lady styling</option>
            <option value="men-styling">Men styling</option>
            <option value="body-movement">Body movements</option>
            <option value="partnerwork">Partnerwork</option>
            <option value="footwork">Footwork</option>
        </select>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 -mx-4">
        @forelse ($courses as $course)

        <a href="{{ route('course.show', $course) }}">
            <div class="bg-white mx-4 rounded-3xl shadow-sm hover:shadow-2xl overflow-hidden">
                <div class="rounded-t-3xl">
                    <img src="{{ $course->image }}" alt="">
                </div>
                <div class="px-3 py-3">
                    <h3 class="text-xl font-semibold text-gray-700">
                        {{ $course->title }}
                    </h3>
                    <p class="text-sm text-gray-500 my-2">
                        {{ $course->excerpt }}
                    </p>
                    <span
                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                        {{ $course->level }}
                    </span>
                </div>
            </div>

        </a>

        @empty
        <div> no courses available</div>
        @endforelse

    </div>
</section>