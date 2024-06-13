
<nav class="w-full flex justify-between items-center p-2 relative">
    <a href="{{route('page.home')}}" class="text-5xl ml-4 font-title"><img src="{{asset("img_folder/logo.png")}}" alt="logo"
            class="h-16"></a>
    <button popovertarget="home_menu_list">
        <x-lucide-menu class="w-14 lg:hidden" id="btn_home_menu_action" ></x-lucide-menu>
    </button>
    <ul class="[&:popover-open]:w-60 [&:popover-open]:overflow-hidden [&:popover-open]:left-full bg-[url('/public/img_folder/nav.svg')] -translate-x-60 p-2 pt-14 bg-sky-600 text-white h-screen backdrop:bg-black backdrop:opacity-30  top-0 [&:popover-open]:absolute lg:bg-none lg:translate-x-0 lg:flex lg:bg-transparent lg:h-fit lg:relative lg:text-white lg:pt-0 transition-all ease-in-out duration-700"
        id="home_menu_list" popover>
        <li><button popovertarget="home_menu_list"><x-lucide-x class="w-14 lg:hidden absolute top-0 right-0" id="btn_home_menu_action" ></x-lucide-x></button><li>
        <x-link-nav href="{{route('page.home')}}">Accueil</x-link-nav>
        <x-link-nav href="{{route('page.advices')}}">Conseils</x-link-nav>
        <x-link-nav href="{{route('page.find_practitioners')}}">Praticien </x-link-nav>
        <x-link-nav href="{{route('page.numbers')}}">Numéro d’urgence</x-link-nav>
        <x-link-nav href="{{route('information.point')}}">Point d’informations</x-link-nav>
        @if($user = auth()->user())
            <x-link-nav href="{{route('logout')}}">Se déconnecter</x-link-nav>
        @endif
    </ul>
</nav>

