<x-app-layout>
    <x-slot name="header">
        <h1>Rechercher un conseil</h1>

        <form action="" class="flex flex-col w-11/12 m-auto">

            <label for="search">Rechercher un conseil</label>
            <input type="search" name="search" id="search" class="rounded-lg border-none"
                placeholder="Rechercher par titre">
        </form>

        <form action="" class=" w-11/12 m-auto">
            <select name="categoryAdvice" id="" class="rounded-lg border-none w-80 mt-8">
                <option value="all" selected>toutes les categories</option>
                <?php 
        foreach ($categorys as $key => $value) {
            ?>
                <option value="<?php    echo $value->name?>"><?php    echo $value->name; ?></option>
                <?php
}
        ?>
            </select>
            <button>ok</button>

        </form>
    </x-slot>
    <div class="grid grid-cols-1 gap-8 justify-items-center md:grid-cols-2 lg:grid-cols-3 ">


        <?php 


if (isset($search)) {
    var_dump($search);
}
foreach ($advices as $key => $value) {
            ?>
        <a href="/advices/<?php    echo $value->id;?>" class="w-11/12 ">
            <article class="flex flex-col rounded-xl border border-blue-600 h-96">
                <img class="object-cover rounded-t-xl h-3/4 " src="<?php    echo $value->img;?>" alt="nemo">
                <h2 class="p-7 truncate"><?php    echo $value->name;?></h2>
            </article>
        </a>
        <?php
}
        ?>


    </div>
</x-app-layout>