<x-app-layout>
    <x-slot name="header">
        <h1>Rechercher un point d'informations</h1>
    </x-slot>
    <div class="grid grid-cols-1 gap-8 justify-items-center md:grid-cols-2 lg:grid-cols-3 ">
        <?php
            foreach ($points as $point) {
                ?>
                <p>{{$point->name}}</p>
        <?php
            }
        ?>
    </div>
</x-app-layout>
