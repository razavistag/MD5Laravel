<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Scripts -->
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js'
        ])
</head>

<body class="font-sans antialiased">

    {{-- NAVBAR & SIDE BAR --}}
    <header>
        @include('layouts.sidebar')
        @include('layouts.navigation')
    </header>

    {{-- MAIN CONTENT --}}
    <main class="pt-4">
        {{ $slot }} 
    </main>
</body>

</html>
