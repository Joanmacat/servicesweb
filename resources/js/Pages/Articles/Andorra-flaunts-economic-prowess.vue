<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../../Components/HomeNavbar.vue';
import Footer from '../../Components/Footer.vue';
</script>

<template>
<Head title="Andorra flaunts economic prowess" />
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

                    <!-- Footer -->
                    <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                      <ul class="text-xs space-x-3">
                        <li class="inline-block">
                          <span class="font-semibold text-gray-200 dark:text-neutral-200">56</span>
                          <span class="text-gray-400 dark:text-neutral-400">articles</span>
                        </li>
                        <li class="inline-block">
                          <span class="font-semibold text-gray-200 dark:text-neutral-200">1k+</span>
                          <span class="text-gray-400 dark:text-neutral-400">followers</span>
                        </li>
                      </ul>

                      <div>
                        <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                          <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          Follow
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Dropdown Card -->
                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500 dark:text-neutral-500">
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  03/05/2024
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  3 min read
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
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">Andorra flaunts its economic prowess: a tangible reality</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">In the present landscape, the Principality of Andorra proudly towers above the European Union's average GDP per capita. Freshly released data from the European Statistical Office, Eurostat, unveils Andorra's substantial lead over the EU and eurozone norms.</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">While the EU and eurozone averages hover around 34,160 euros and 37,672 euros per person respectively, Andorra's macroeconomic signals for 2022 soar to an impressive 39,448 euros per capita.</p>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1691162365702-1ad77c1cf647?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="View from Andorra la Vella">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          A view from Andorra la Vella
        </figcaption>
      </figure>

      <p class="text-lg text-gray-800 dark:text-neutral-200">Furthermore, Andorra emerges as one of the swiftest-growing economies, boasting a competitive surge of 7.7%, leaping from 36,618 euros in 2021 to nearly 40,000 euros presently.</p>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Also the text is in line with the recommendations of various international organizations (such as the United Nations, UNESCO, or the Council of Europe, among others) that have already presented similar working documents to those now approved in the country.</p>

      <blockquote class="text-center p-4 sm:px-7">
        <p class="mt-6 text-xl font-medium text-gray-800 md:text-2xl md:leading-normal xl:text-2xl xl:leading-normal dark:text-neutral-200">
          "The Andorran economy will grow above that of the European Union until 2027."
        </p>
        <p class="mt-5 text-gray-800 dark:text-neutral-200">
          is21 Integral Serveis
        </p>
      </blockquote>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1618044733300-9472054094ee?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorran prospects">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          The Andorran economy counts with good prospects for the following years
        </figcaption>
      </figure>

      <div class="space-y-3">
        <h3 class="mt-6 text-2xl font-semibold dark:text-white">Good prospects</h3>

        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Projections foresee Andorra's economy outpacing that of the European Union until 2027. Moody's recent elevation of Andorra's economic rating from Baa2 to Baa1, along with forecasts indicating real GDP growth rates of 2% for 2024 and 1.5% for 2025 and 2026, accentuate the nation's promising economic trajectory. These forecasts notably outshine those of neighboring economies, particularly France and Spain.</p>
        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">In-depth analysis, corroborated by the Andorran Banking Association, pinpoints the financial sector as a pivotal catalyst, contributing 14% to the GDP. Moreover, prospects for economic acceleration abound, notably through initiatives such as the bid to host the Alpine Ski World Championships in 2029, with projected economic dividends reaching 1% of gross domestic product.</p>
        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Ultimately, Andorra fortifies its stance among nations with the most resilient economic vitality. For exhaustive insights or investment prospects in specific sectors, reach out to Integral Serveis 21 offices for tailored counsel.</p>
        <a href="https://www.is21.ad/en/news/andorras-robust-economic-health-statistical-reality" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the original article in here.</p></a>

      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>