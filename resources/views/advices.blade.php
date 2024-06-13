<x-app-layout>
    <x-slot name="header">
        <h1 class="text-4xl font-title text-center p-10">Rechercher un conseil</h1>
        <x-form action="{{route('page.advices')}}">
            <div class="flex flex-col">
                <input type="search" name="query" id="search" class="rounded-lg border-none text-black"
                    placeholder="Rechercher par titre">
            </div>
            <div class="flex flex-col">
                <x-select name="categoryAdvice" id="query">
                    <option value="all" selected>Toutes les catégories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-select>
            </div>
            <x-submit-button>Rechercher</x-submit-button>
        </x-form>
        </div>

    </x-slot>

    <div class="grid grid-cols-1 gap-8 justify-items-center md:grid-cols-2 lg:grid-cols-3 my-20">

        @if(count($advices) < 1)
            <h3 class="text-center">Aucun résultat trouvé</h3>
        @endif

        @foreach ($advices as $advice)
            <a href="/advices/{{ $advice->id }}" class="w-11/12 ">
                <article class="flex flex-col rounded-xl border border-blue-600 h-96">
                    <img class="object-cover rounded-t-xl h-3/4 " src="img_folder/{{ $advice->img }}" alt="img conseil">
                    <h2 class="p-7 truncate">{{ $advice->name }}</h2>
                </article>
            </a>
        @endforeach
    </div>
</x-app-layout>
