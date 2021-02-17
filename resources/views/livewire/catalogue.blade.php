<section id="catalogue" class="mx-3 sm:mx-0">
    <div id="filters" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-5">
        <div>
            <label for="style" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Style</label>
            <select wire:model="style"
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600">
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
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
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
                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
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
        <livewire:course-card :course="$course" />
        @empty
        <div> no courses available</div>
        @endforelse

    </div>
</section>