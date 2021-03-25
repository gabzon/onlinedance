<a href="/">
    @if (config('services.school.name') == 'dancefloor')
    @include('icons.logo-black', [ 'style' => 'h-16'])
    @else
    <img src="{{ asset('images/logo-ustyle.png') }}" alt="UStyle.dance" class="h-16">
    @endif
</a>