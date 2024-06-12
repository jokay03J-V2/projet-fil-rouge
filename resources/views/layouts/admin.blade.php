<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mental Hub') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css'])
    </head>
    <body class="flex flex-col">
            
        <!-- Page Heading -->
        @isset($header)
            <header>
                {{$header}}
            </header>
        @endisset
        <!-- Page Content -->
        <main {{ $attributes->merge(['class' => 'min-h-[90vh] flex flex-col md:flex-row']) }}>
            <aside class="min-h-full bg-primary p-2 flex flex-col items-center w-full text-white md:w-2/12">
                <a href="{{route('admin.home')}}"><img src="/img_folder/logo.png" alt="logo"></a>
                <h1 class="text-2xl w-full border-b text-center border-white">Back office</h1>
                <ul class="w-full flex flex-col gap-2 my-2">
                    <li>
                        <a href="#" class="flex items-center gap-1 p-1 transition-all hover:bg-tonal"><x-lucide-map-pinned class="h-5"/> Point d'information</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-1 p-1 transition-all hover:bg-tonal"><x-lucide-message-circle-question class="h-5"/> Conseil</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-1 p-1 transition-all hover:bg-tonal"><x-lucide-phone class="h-5"/> Numéro d'urgence</a>
                    </li>
                    <li>
                        <a href="{{route('admin.register.show')}}" class="flex items-center gap-1 p-1 transition-all hover:bg-tonal"><x-lucide-users class="h-5"/> Gestion utilisateur</a>
                    </li>
                </ul>
            </aside>
            <div class="w-full md:w-10/12">
                <h2 class="w-full px-1 py-3 text-2xl shadow-md mb-2">{{$name}}</h2>
                {{ $slot }}
            </div>
        </main>

        <footer class="w-full flex flex-col justify-center items-center bg-slate-600 p-10 text-white text-lg">
            <small>Create by EDENSchool</small>
        </footer>
    </body>
</html>
