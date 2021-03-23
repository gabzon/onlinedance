@if (config('services.school.name') == 'dancefloor')
@include('icons.logo-white', [ 'style' => 'h-10'])
@else
<h1 class="font-semibold text-gray-600">UStyle</h1>
@endif