@Vite(['resources/js/API_logique.js'])
<x-app-layout>
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
        <x-form action="#">
            <x-select name="practitioners_select" id="practitioners_select">
                <option value="default">select profession</option>
            </x-select>
            <x-submit-button id="btn_form_practitioners">sort</x-submit-button>
        </x-form>
    </x-slot>
    <!------------------------------------------------------------------------------------------------------>
    <!-- main contente -->
    <!------------------------------------------------------------------------------------------------------>
    <ul class="grid grid-cols-1 w-full p-5 md:grid-cols-2 lg:grid-cols-4 gap-3" id="liste_of_practitioners"></ul>
    <!------------------------------------------------------------------------------------------------------>
</x-app-layout>