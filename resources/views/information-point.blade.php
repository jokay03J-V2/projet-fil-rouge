<x-app-layout>
    <x-slot name="header">
        <h1 class="font-title text-4xl m-4 text-center w-3/4 md:w-full">Rechercher un point d'informations</h1>
        <x-form action="{{route('information.point')}}">
            <input type="text" class="text-black border-none rounded-lg" name="query"
                placeholder="Chercher par code postale">
            <x-select class="text-black" name="selectquery" id="services">
                <option value="null">Tous les services</option>
                @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
            </x-select>
            <x-submit-button>Envoyer</x-submit-button>
        </x-form>
    </x-slot>
    <div class="grid grid-cols-1 gap-5 justify-items-center md:grid-cols-2 lg:grid-cols-3 my-20 mx-10">

        @foreach ($points as $point)
            <article class="flex flex-col items-center rounded-xl border border-tonal w-full p-1">
                <h2 class="p-6 truncate w-9/12 text-center font-title text-2xl text-secondary ">{{$point->name}}</h2>
                <ul class="flex flex-col justify-center items-center gap-2 text-center">
                    <li class="flex items-center">
                        <x-lucide-calendar class="w-6 m-0.5" />
                        <p>{{$point->hourly}}</p>
                    </li>

                    <li class="flex items-center">
                        <x-lucide-map-pin class="w-6 m-0.5" />
                        <p>{{$point->address}} - {{$point->postcode}}</p>
                    </li>

                    <li class="flex items-center">
                        <x-lucide-phone class="w-6 m-0.5" />
                        <p>{{$point->phone_number}}</p>
                    </li>
                </ul>

            </article>
        @endforeach
    </div>
</x-app-layout>