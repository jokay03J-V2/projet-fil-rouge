<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mental Hub') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[url('/public/img_folder/banner.svg')] bg-center bg-cover bg-no-repeat h-screen relative flex justify-center items-center">
    <form method="POST" action="" class="w-3/4 lg:w-3/12 lg:min-w-80 absolute bg-white rounded-xl flex flex-col gap-8 items-center">
        @csrf
        <h1 class="text-4xl font-title p-10 text-center">Login Admin</h1>
        <input type="email" name="email" placeholder="Email" class="w-2/3 rounded-xl border-2 border-primary" required>
        <input type="password" name="password" placeholder="Password" class="w-2/3 rounded-xl border-2 border-primary" required>

        @if ($errors->any())
            <div class="text-red-500 w-2/3">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <button type="submit" class="py-3 px-8 bg-tertiary rounded-xl m-10">Se connecter</button>
    </form>
</body>

</html>
