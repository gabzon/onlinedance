<section>

    @if (session()->has('success'))
    <x-partials.notifications />
    @endif

    <div class="mb-4">
        <input type="search" name="search" wire:model="search"
            class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
            placeholder="Search...">
    </div>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Full Name
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Origin
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Styles
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Experience
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Birthday
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($instructors as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <a href="{{ route('instructor.show', $item) }}"
                                            class="flex-shrink-0 group block">
                                            <div class="flex items-center">
                                                <div>
                                                    @if ($item->thumbnail)
                                                    <img class="inline-block h-9 w-9 rounded-full"
                                                        src="{{ asset($item->thumbnail) }}" alt="">
                                                    @endif
                                                </div>
                                                <div class="ml-3">
                                                    <p
                                                        class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                        {{ $item->first_name }} {{ $item->last_name }}
                                                    </p>
                                                    <p
                                                        class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                                        View profile
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->origin }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @foreach ($item->styles as $s)
                                        {{ $s->name }}
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ Carbon\Carbon::parse($item->beginning)->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ Carbon\Carbon::parse($item->birthday)->format('d.m.y') }} ({{$item->age}}
                                        years old)
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end items-center">
                                            <a href="{{ route('instructor.edit', $item) }}"
                                                class="text-gray-500 hover:text-blue-600">
                                                @include('icons.edit')
                                            </a>
                                            <button wire:click="delete({{ $item->id }})" type="submit"
                                                class="ml-2 text-gray-600 hover:text-red-700"
                                                onclick="confirm('Are you sure you want to delete this course?') || event.stopImmediatePropagation()">
                                                @include('icons.trash')
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 mx-4">
        {{ $instructors->links()}}
    </div>
</section>