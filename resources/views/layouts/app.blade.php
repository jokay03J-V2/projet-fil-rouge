<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col w-screen">
            
        <!-- Page Heading -->
        @isset($header)
            <header class="w-full flex flex-col justify-center items-center bg-primary text-white mb-8">
                    @include('layouts.navigation')
                {{ $header }}
            </header>
        @endisset
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="w-full flex flex-col justify-center items-center bg-slate-600 p-10 text-white text-lg">
            <small>Create by EDENSchool</small>
        </footer>
        <script>
            let 
            
        </script>
    </body>
</html>
