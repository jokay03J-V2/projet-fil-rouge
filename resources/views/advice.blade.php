<x-app-layout>
    <x-slot name="header">
        <h1 class="text-6xl font-title p-6 text-center mb-16">{{ $advice->name }}</h1>

        </div>

    </x-slot>

    <div class="flex flex-col items-center">

        <article class="flex flex-col items-center justify-center w-11/12 rounded-2xl border-2 border-primary m-auto">
            <img src="{{$advice->img}}" alt="advice img" class="w-full h-80 rounded-t-2xl object-cover">
            <p class="text-center p-4">
                {{ $advice->content}}
            </p>
        </article>

        <a href="/advices" class="md:hidden"><button class="bg-primary p-2 m-14 w-20 rounded-lg mb-32">retour</button></a>

    </div>
</x-app-layout>