@Vite(['resources/js/API_logique.js'])
<x-app-layout>
    <!-- header -->
    <!------------------------------------------------------------------------------------------------------>
    <x-slot name="header">
        <h1 class="font-title text-4xl m-4 text-center w-3/4 md:w-full">Rechercher un praticien</h1>
        <x-form action="#">
            <x-select name="practitioners_select" id="practitioners_select">
                <option value="default">Toutes les professions</option>
            </x-select>
            <x-submit-button id="btn_form_practitioners">Rechercher</x-submit-button>
        </x-form>
    </x-slot>
    <!------------------------------------------------------------------------------------------------------>
    <!-- main contente -->
    <!------------------------------------------------------------------------------------------------------>
    <ul class="grid grid-cols-1 w-full p-5 md:grid-cols-2 lg:grid-cols-3 gap-3" id="liste_of_practitioners"></ul>
    <!------------------------------------------------------------------------------------------------------>
</x-app-layout>