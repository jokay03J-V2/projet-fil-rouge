<x-app-layout>

   <!-- header -->
   <!------------------------------------------------------------------------------------------------------>
   <x-slot name="header">
      <h1 class="font-title text-6xl mt-24">Accueil</h1>
      <p class="font-sans text-xl w-10/12 text-center my-16 lg:mb-32">
         Bienvenue sur notre page d'accueil dédiée à la santé mentale. Découvrez des ressources précieuses, des conseils
         pratiques et des services de soutien pour améliorer votre bien-être mental. Ensemble, brisons les tabous et
         promouvons une meilleure compréhension de la santé mentale.
      </p>
   </x-slot>
   <!------------------------------------------------------------------------------------------------------>
   <!-- main content -->
   <!------------------------------------------------------------------------------------------------------>
   <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-10 lg:gap-14 w-11/12 mx-auto my-20">
      <h2 class="lg:self-start font-title text-4xl mt-14 md:col-span-2 lg:col-span-1">Fonctionnalitées</h2>

      <!-- Home card -->
      <a href="{{ route('information.point') }}" class="h-full">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start w-full h-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/information_point.jpg" alt="/"
               class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
            <hgroup class="w-10/12 p-10 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Point d'informations</h3>
               <p class="m-2">
                  Un point d'information sur la santé mentale offre des ressources, conseils et soutien pour promouvoir
                  le bien-être mental. Il fournit des informations sur les troubles mentaux, les options de traitement
                  et les services de soutien disponibles. Son objectif est de sensibiliser et de réduire la
                  stigmatisation liée à la santé mentale.
               </p>
            </hgroup>
         </article>
      </a>

      <!-- Conseils card -->
      <a href="{{ route('page.advices') }}" class="h-full">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start w-full h-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/conseil.jpg" alt="/"
               class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
            <hgroup class="w-10/12 p-10 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Conseils</h3>
               <p class="m-2">
                  Nos conseils en santé mentale offrent des stratégies pratiques pour gérer le stress, améliorer la
                  résilience et maintenir un équilibre émotionnel. tu y trouvera des techniques de relaxation, des
                  exercices de pleine conscience et des recommandations pour une vie saine. Adopte ces conseils pour
                  favoriser un bien-être mental optimal.
               </p>
            </hgroup>
         </article>
      </a>


      <!-- Praticiens card -->
      <a href="{{ route('page.find_practitioners') }}" class="h-full">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start w-full h-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/practitioners.jpg" alt="/"
               class="w-full lg:w-1/4 h-60 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
            <hgroup class="w-10/12 p-10 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Praticiens</h3>
               <p class="m-2">
                  Nos praticiens en santé mentale sont des professionnels qualifiés, comme des psychologues, psychiatres
                  et thérapeutes, dédiés à t'offrir un soutien personnalisé. Ils utilisent des approches fondées sur des
                  preuves pour traiter divers troubles mentaux et améliorer le bien-être émotionnel. Leur objectif est
                  de t'aider à retrouver une vie équilibrée et épanouissante.
               </p>
            </hgroup>
         </article>
      </a>

      <a href="{{ route('page.numbers') }}" class="mb-16 h-full">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start w-full h-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/emergency_number.jpg" alt="/"
               class="w-full lg:w-1/4 h-64 md:h-80 object-cover rounded-t-xl lg:rounded-l-xl lg:rounded-r-none">
            <hgroup class="w-10/12 p-10 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Numéro d’urgence</h3>
               <p class="m-2">
                  Les numéros d'urgence en santé mentale sont là pour toi en cas de crise. Tu peux les contacter à tout
                  moment pour obtenir du soutien, des conseils et une assistance immédiate. N'hésite pas à appeler si tu
                  as besoin d'aide pour faire face à des pensées suicidaires, de l'anxiété ou d'autres problèmes
                  émotionnels.
               </p>
            </hgroup>
         </article>
      </a>

      <!------------------------------------------------------------------------------------------------------>
   </section>
   <!------------------------------------------------------------------------------------------------------>
</x-app-layout>