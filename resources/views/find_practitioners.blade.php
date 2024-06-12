@Vite(['resources/js/API_logique.js'])
<x-app-layout class="">
    <!-- header -->
    <!------------------------------------------------------------------------------------------------------>
    <x-slot name="header">
        <h1 class="font-title text-4xl m-2">Rechercher un praticien</h1>
        <p class="font-sans text-lg w-10/12 text-center my-5">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, consequuntur! Excepturi dolores tempore
            debitis, placeat fugiat error laborum voluptatem aperiam illum nam recusandae! Saepe quam officiis id eius
            ex
            ducimus.
        </p>
        <x-form action="{{route('page.find_practitioners')}}">
            <x-select name="commune" id="practitioners_select_commune" value="{{$query}}">
                <option value="">Tout les communes</option>
                @foreach ($communes as $commune)
                    <option value="{{$commune->commune}}">{{$commune->commune}}</option>
                @endforeach
            </x-select>
            <x-submit-button id="btn_form_practitioners">sort</x-submit-button>
        </x-form>
    </x-slot>
    <!------------------------------------------------------------------------------------------------------>
    <!-- main contente -->
    <!------------------------------------------------------------------------------------------------------>
    <ul class="grid grid-cols-1 w-full p-5 md:grid-cols-2 lg:grid-cols-4 gap-3" id="liste_of_practitioners">
        @foreach ($Practitioners as $Practitioner)
            <li>
                <article class="rounded-2xl border-2 border-tonal flex justify-center items-center flex-col h-full test">
                    <h2 class="text-secondary text-3xl font-title m-1 flex flex-wrap flex-col items-center justify-center">
                        {{$Practitioner->nom}}
                        <span class="text-xl ml-1">
                            {{$Practitioner->sex}}
                        </span>
                    </h2>
                    <ul>
                        <li class="flex flex-row items-center text-xl">
                            <x-lucide-user class="w-6 m-1"></x-lucide-user>
                            <p class="text-xl">{{$Practitioner->profession}}</p>
                        </li>
                        <li class="flex flex-row items-center text-xl">
                            <x-lucide-phone class="w-6 m-1"></x-lucide-phone>
                            <a href="tel:{{$Practitioner->tel}}" class="text-xl">{{$Practitioner->tel}}</a>
                        </li>
                        <li class="flex flex-row items-center text-xl">
                            <x-lucide-map-pin class="w-6 m-1"></x-lucide-map-pin>
                            <address>
                                <p class="text-xl">{{$Practitioner->address}}</p>
                            </address>
                        </li>
                        <li class="flex flex-row items-center text-xl">
                            <x-lucide-compass class="w-6 m-1"></x-lucide-compass>
                            <p class="text-xl">{{$Practitioner->commune}}</p>
                        </li>
                    </ul>
                </article>
            </li>
        @endforeach
    </ul>
    <!------------------------------------------------------------------------------------------------------>
</x-app-layout>