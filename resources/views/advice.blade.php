<x-app-layout>
    <x-slot name="header">
        <h1 class="text-4xl font-title p-10 text-center mb-16">{{ $advice->name }}</h1>
    </x-slot>

    <div class="flex flex-col items-center mt-24 mb-24">

        <article class="flex flex-col items-center justify-center w-9/12 rounded-2xl border-2 border-primary m-auto">
            <img src="{{asset('/img_folder/' . $advice->img)}}" alt="advice img" class="w-full h-96 rounded-t-2xl object-cover">
            <p class="text-center px-2 lg:px-20 py-10 text-lg">
                {{ $advice->content}}
            </p>
        </article>

        <a href="{{route("page.advices")}}" class=" bg-primary p-3 m-14 rounded-lg mb-32 block md:hidden text-black ">Retour</a>

    </div>
</x-app-layout>
