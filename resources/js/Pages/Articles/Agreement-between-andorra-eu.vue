<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../../Components/HomeNavbar.vue';
import Footer from '../../Components/Footer.vue';
</script>

<template>
<Head title="Women rights in Andorra" />
<HomeNavbar></HomeNavbar>
<!-- Blog Article -->
<div class="max-w-2xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl place-content-center">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="flex-shrink-0 p-6">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        </div>

        <div class="grow">
          <div class="flex justify-between items-center gap-x-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">
                    Anna Ludic
                  </span>

                  <!-- Dropdown Card -->
                  <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                  </div>
                  <!-- End Dropdown Card -->
                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500 dark:text-neutral-500">
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  17/07/2024
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  4 min read
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Avatar Media -->

    <!-- Content -->
    <div class="space-y-5 md:space-y-8">
      <div class="space-y-3">
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">AR+I Sees a Positive Impact of the Agreement Between Andorra and the EU on Economic Growth</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">
            Yvan Lara, the coordinator of the political analysis group Andorra Recerca i Innovació (AR+I), stated on Tuesday that there is a “clearly positive impact” from the agreement between Andorra and the European Union on the economic growth of the Principality.</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Yvan Lara’s assessment is quite clear based on all impact evaluations conducted. Throughout the analyzed period, economic growth would consistently surpass what would be expected in a ‘status quo’ scenario. Lara explicitly stated that the impact is “very clear.”</p>
      
      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://cdn.pixabay.com/photo/2024/05/24/09/54/andorra-views-8784685_960_720.jpg" alt="Agreement between andorra and the EU">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          Throughout the analyzed period, economic growth would consistently surpass what would be expected.
        </figcaption>
      </figure>

      <h3 class="mt-6 text-2xl font-semibold dark:text-white">Main points</h3>
      <ul>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The GDP for the analyzed period (2050) would be approximately 5% higher if the agreement is accepted compared to rejecting it.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Imports would grow nearly 6% more than in the current situation, and exports would be up to 20% higher.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Regarding the labor market, the agreement would lead to the creation of more jobs, with a projected increase of 4.5% over the next 25 years compared to the current situation.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Notably, most of these new jobs would benefit Andorran citizens or residents, and positive effects on salaries are also anticipated.</li>
      </ul>
      
      <h3 class="mt-6 text-2xl font-semibold dark:text-white">Diversification and objectives</h3>
      <p class="text-lg text-gray-800 dark:text-neutral-200">While the agreement is considered a “key instrument” for encouraging diversification, its direct impact on diversifying the Andorran economy has been more modest. To significantly reduce dependence on traditional sectors, additional supplementary actions are necessary, leveraging the new rules of the game, as stated in the communication.</p>
      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Certain sectors, such as finance, information and communication, and construction, are expected to experience a “dynamic effect.” However, improvements in other sectors may be more moderate.
It’s worth noting that sectors like administrative activities, transportation, agriculture, and livestock may face short-term difficulties, but the situation is expected to reverse in the long term.</p>

      <div class="space-y-3">
        <a href="https://www.europapress.es/catalunya/andorra-01111/noticia-ari-ve-impacto-positivo-acuerdo-andorra-ue-crecimiento-economico-20240716180801.html" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the original article in here</p></a>
      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>