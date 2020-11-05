<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>
<body class="bg-gray-100">

<<<<<<< HEAD
<!-- Navbar -->
<nav x-data="{ open: false }" class="body-font shadow-lg">
    <div class="container text-gray-700 mx-auto sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
        {{ $navbar }}
    </div>
=======
<nav id="navbar" class="shadow">
    {{ $navbar }}
>>>>>>> 992a7486339884b1a1aaf7a1e1631382fd15be4f
</nav>

<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
