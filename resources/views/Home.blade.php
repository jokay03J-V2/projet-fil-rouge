<x-app-layout>

   <!-- header -->
   <!------------------------------------------------------------------------------------------------------>
   <x-slot name="header">
      <h1 class="font-title text-6xl mt-24">Accueil</h1>
      <p class="font-sans text-xl w-10/12 text-center my-16 lg:mb-32">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, consequuntur! Excepturi dolores tempore
         debitis, placeat fugiat error laborum voluptatem aperiam illum nam recusandae! Saepe quam officiis id eius ex
         ducimus.
      </p>
   </x-slot>
   <!------------------------------------------------------------------------------------------------------>
   <!-- main content -->
   <!------------------------------------------------------------------------------------------------------>
   <section class="flex flex-col justify-center items-center gap-10 lg:gap-14 w-11/12 mx-auto my-20">
   <h2 class="lg:self-start font-title text-4xl mt-14">Fonctionnalitées</h2>

   <!-- Home card -->
   <a href="{{ route('information.point') }}">
      <article class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
         <img src="./img_folder/information_point.jpg" alt="/" class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
         <hgroup class="w-10/12 p-10 text-center lg:text-start">
            <h3 class="text-secondary text-3xl font-title m-2">Point d'informations</h3>
            <p class="m-2">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
               rem nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
               perferendis?
            </p>
         </hgroup>
      </article>
   </a>

   <!-- Conseils card -->
   <a href="{{ route('page.advices') }}">
      <article class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
         <img src="./img_folder/conseil.jpg" alt="/" class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
         <hgroup class="w-10/12 p-10 text-center lg:text-start">
            <h3 class="text-secondary text-3xl font-title m-2">Conseils</h3>
            <p class="m-2">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
               rem nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
               perferendis?
            </p>
         </hgroup>
      </article>
   </a>

   <!-- Praticiens card -->
   <a href="{{ route('page.find_practitioners') }}">
      <article class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
         <img src="./img_folder/practitioners.jpg" alt="/" class="w-full lg:w-1/4 h-60 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
         <hgroup class="w-10/12 p-10 text-center lg:text-start">
            <h3 class="text-secondary text-3xl font-title m-2">Praticiens</h3>
            <p class="m-2">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
               rem nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
               perferendis?
            </p>
         </hgroup>
      </article>
   </a>

   <a href="{{ route('page.numbers') }}" class="mb-16">
   <article class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
      <img src="./img_folder/emergency_number.jpg" alt="/" class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
      <hgroup class="w-10/12 p-10 text-center lg:text-start">
         <h3 class="text-secondary text-3xl font-title m-2">Numéro d’urgence</h3>
         <p class="m-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore rem nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa perferendis?
         </p>
      </hgroup>
   </article>
</a>

      <!------------------------------------------------------------------------------------------------------>
   </section>
   <!------------------------------------------------------------------------------------------------------>
</x-app-layout>
