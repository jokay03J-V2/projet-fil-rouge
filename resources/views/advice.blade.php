<x-app-layout>
    <x-slot name="header">
        <h1 class="text-6xl font-title p-6 text-center">{{ $advice->name }}</h1>

        </div>

    </x-slot>

    <div class="flex flex-col">

        <article class="flex flex-col items-center justify-center w-11/12 rounded-2xl border-2 border-primary m-auto">
            <img src="{{$advice->img}}" alt="advice img" class="w-full h-80 rounded-t-2xl object-cover">
            <p class="text-center p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat assumenda nulla quam
                quibusdam. Aspernatur quisquam odit voluptatibus neque quis mollitia alias commodi? Cumque vel, aliquam
                accusantium odit modi mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                repellat assumenda nulla quam quibusdam. Aspernatur quisquam odit voluptatibus neque quis mollitia alias
                commodi? Cumque vel, aliquam accusantium odit modi mollitia.Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Corrupti repellat assumenda nulla quam quibusdam. Aspernatur quisquam odit
                voluptatibus neque quis mollitia alias commodi? Cumque vel, aliquam accusantium odit modi mollitia.Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat assumenda nulla quam quibusdam.
                Aspernatur quisquam odit voluptatibus neque quis mollitia alias commodi? Cumque vel, aliquam accusantium
                odit modi mollitia.
            </p>
        </article>

        <a href=""><button class="bg-primary p-2 w-20 rounded-lg">retour</button></a>

    </div>
</x-app-layout>