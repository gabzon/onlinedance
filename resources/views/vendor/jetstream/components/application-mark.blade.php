@if (config('services.school.name') == 'dancefloor')
@include('icons.logo-white', [ 'style' => 'h-10'])
@else
<img src="{{ asset('images/logo-ustyle.png') }}" alt="UStyle.dance" class="h-14">
@endif