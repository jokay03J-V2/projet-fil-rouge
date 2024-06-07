<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl">Rechercher un point d'informations</h1>
        <x-form action="{{route('information.point')}}">
            <input type="text" class="text-black" name="query">
            <select class="text-black" name="selectquery">
                <option value="null">--choose un option--</option>
                @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
            </select>
            <button>Envoyer</button>
        </x-form>
    </x-slot>
    <div class="grid grid-cols-1 gap-5 justify-items-center md:grid-cols-2 lg:grid-cols-4 p-4">

            @foreach ($points as $point)
        <article class="flex flex-col items-center rounded-xl border border-tonal w-full p-1">
            <h2 class="p-6 truncate font-title text-2xl text-secondary" >{{$point->name}}</h2>
            <ul class="flex flex-col justify-center items-center gap-2 text-center">
                <li class="flex items-center">
                    <x-lucide-calendar class="w-6 m-0.5"/>
                    <p>{{$point->hourly}}</p>
                </li>

                <li class="flex items-center">
                    <x-lucide-map-pin class="w-6 m-0.5"/>
                    <p>{{$point->address}} - {{$point->postcode}}</p>
                </li>

                <li class="flex items-center">
                    <x-lucide-phone class="w-6 m-0.5"/>
                    <p>{{$point->phone_number}}</p>
                </li>
            </ul>

        </article>
        @endforeach
    </div>
</x-app-layout>
