<x-admin-layout>
    <x-slot name="name">Numéro d'urgence</x-slot>
    <x-form action="#" method="get">
        <x-select class="border-2" name="query" id="query">
            <option value="null">choisir une catégorie</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </x-select>
        <x-submit-button class="border-2">Filtrer</x-submit-button>
    </x-form>

    <div class="flex flex-col items-center">
        <table class="flex flex-col">
            <thead>
            <tr class="border-b-2 text-left">
                <th class="w-80">Nom</th>
                <th class="w-40">Numéro</th>
                <th class="w-24">Horaires</th>
                <th class="w-16">Modifier</th>
                <th class="w-10">Effacer</th>
            </tr>
            </thead>

            <tbody class="flex flex-col gap-2" >
            @foreach($numbers as $number)
                <tr class="flex gap-5">
                    <td class="truncate w-72">{{$number->name}}</td>
                    <td class="w-40">{{$number->content}}</td>
                    <td class="w-20">{{$number->hourly}}</td>
                    <td class="w-16">
                        <a href="#"><x-lucide-pencil class="w-6"></x-lucide-pencil></a>
                    </td>
                    <td class="w-20">
                        <button><x-lucide-trash-2 class="w-6"></x-lucide-trash-2></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
