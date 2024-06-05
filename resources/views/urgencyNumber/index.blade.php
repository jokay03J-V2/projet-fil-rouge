<x-app-layout>
    <x-slot name="header">
        <h1>Rechercher un numéro d’urgence</h1>
        <form action="{{route('page.numbers')}}">
            <select name="query" id="query" class="text-black">
                <option value="null" disabled selected>Rechercher par catégorie</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </form>
    </x-slot>
</x-app-layout>