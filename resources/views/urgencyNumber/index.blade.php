<x-app-layout>
    <!-- header -->
    <x-slot name="header">
        <h1 class="font-title text-4xl m-4 text-center w-3/4 md:w-full">Rechercher un numéro d’urgence</h1>
        <x-form action="{{route('page.numbers')}}">
            <x-select name="query" id="query">
                <option value="null" @unless($query !== 'null') selected @endunless>Tout les catégories</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if ($category->id === (int) $query) selected @endif>{{$category->name}}
                    </option>
                @endforeach
            </x-select>
            <x-submit-button>Rechercher</x-submit-button>
        </x-form>
    </x-slot>
    <!-- main -->
    <ul class="mx-10 my-20 grid grid-cols-1 gap-6 mb-10 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($numbers as $number)        
            <li class="w-full">
                <article class="p-5 flex flex-col items-center rounded-xl border border-tonal" class="w-full">
                    <h2 class="truncate font-title w-full text-2xl text-center text-secondary">{{$number->name}}</h2>
                    <ul class="w-fit flex flex-col items-center mt-2 gap-2">
                        <li class="flex items-center w-fit">
                            <x-lucide-phone class="w-7 mr-2" />
                            <a href="tel:{{$number->content}}" class="text-base">{{$number->content}}</a>
                        </li>
                        <li class="flex items-center w-fit">
                            <x-lucide-calendar class="w-7 mr-2" />
                            <p>{{$number->hourly}}</p>
                        </li>
                    </ul>
                </article>
            </li>
        @endforeach
    </ul>
</x-app-layout>