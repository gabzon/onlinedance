<a href="/">
    @if (config('services.school.name') == 'dancefloor')
    @include('icons.logo-black', [ 'style' => 'h-16'])
    @else
    <h1 class="font-semibold text-gray-600 text-4xl">UStyle</h1>
    @endif
</a>