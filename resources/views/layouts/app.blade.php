<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{ $head ?? '' }}

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
{{-- {{ config('settings.theme_mode') == 1 ? 'dark':''}}" --}}

<body class="font-sans antialiased {{ config('services.school.name') == 'dancefloor' ? 'dark': ''}}">
    <div class="min-h-screen bg-gray-100">
        <div>
            @livewire('navigation-dropdown')
        </div>
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @include('partials.footer')

    @stack('modals')
    @stack('scripts')

    @livewireScripts
</body>

</html>