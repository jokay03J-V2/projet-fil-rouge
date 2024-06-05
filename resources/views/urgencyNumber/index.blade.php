<x-app-layout>
    <x-slot name="header">
        <h1>Rechercher un numéro d’urgence</h1>
        <form action="{{route('page.numbers')}}" class="flex gap-1">
            <x-select name="query" id="query">
                <option value="null" disabled selected>Rechercher par catégorie</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </x-select>
            <x-submit-button>Send</x-submit-button>
        </form>
    </x-slot>
</x-app-layout>