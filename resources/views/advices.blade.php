<x-app-layout>
    <x-slot name="header">
        <h1 class="text-6xl font-title p-6 text-center">Rechercher un conseil</h1>

        <form action="" method="GET" class="flex flex-col w-11/12 m-auto">
            @csrf
            <label for="search" class="text-black">Rechercher un conseil</label>
            <input type="search" name="query" id="search" class="rounded-lg border-none text-black"
                placeholder="Rechercher par titre">

            <select name="categoryAdvice" class="rounded-lg border-none w-80 m-6 text-black">
                <option value="all" selected>Toutes les catégories</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="text-lg border p-3 rounded-lg">OK</button>
        </form>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 justify-items-center md:grid-cols-2 lg:grid-cols-3 mt-20 mb-20">
        @if(isset($results))
            @if($results->isEmpty())
                <h3 class="text-black">Aucun résultat trouvé</h3>
            @else
                @foreach ($results as $value)
                    <a href="/advices/{{ $value->id }}" class="w-11/12 ">
                        <article class="flex flex-col rounded-xl border border-blue-600 h-96">
                            <img class="object-cover rounded-t-xl h-3/4 " src="{{ $value->img }}" alt="nemo">
                            <h2 class="p-7 truncate">{{ $value->name }}</h2>
                        </article>
                    </a>
                @endforeach
            @endif
        @else
            @foreach ($advices as $value)
                <a href="/advices/{{ $value->id }}" class="w-11/12 ">
                    <article class="flex flex-col rounded-xl border border-blue-600 h-96">
                        <img class="object-cover rounded-t-xl h-3/4 " src="{{ $value->img }}" alt="nemo">
                        <h2 class="p-7 truncate">{{ $value->name }}</h2>
                    </article>
                </a>
            @endforeach
        @endif
    </div>
</x-app-layout>