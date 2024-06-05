<nav x-data="{ open: false }" class="w-full flex justify-between items-center p-2">
    <a href="{{route('page.home')}}" class="text-5xl ml-4 font-title">titre</a>
    <x-lucide-menu class="w-14 lg:hidden "></x-lucide-menu>
    <ul class="hidden lg:flex">
        <x-link-nav href="#">conseils</x-link-nav>
        <x-link-nav href="#">Practiciens</x-link-nav>
        <x-link-nav href="#">Numéro d’urgence</x-link-nav>
        <x-link-nav href="#">Point d’information</x-link-nav>
    </ul>
</nav>