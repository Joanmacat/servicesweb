<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../../Components/HomeNavbar.vue';
import Footer from '../../Components/Footer.vue';

document.title = "Andorra is considering charging foreign cars that wish to enter the country - Andorra Connect"
</script>

<template>
<Head title="Andorra is considering charging foreign cars that wish to enter the country" />
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
                  28/08/2024
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
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">Top Countries with the Most Paid Holidays: Andorra Ranks Second with 44 Days</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">
            In Europe, the law mandates four weeks of paid vacation. However, governments of different countries add public holidays to achieve better work-life balance and productivity.</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">A study has identified the countries with the most holidays, including both vacations and public holidays. Andorra ranks second with 44 days, just behind San Marino. Interestingly, the top three countries are microstates. Monaco is third with 42 days.</p>
      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">These figures also include the two non-working days per week mandated by law, which can be fewer if the 40-hour workweek is exceeded in fewer days.</p>
      
      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1703252293659-97a00ecb827b?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra top country holidays">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          Andorra is a great holiday destination, attracting people from around the world
        </figcaption>
      </figure>

      <h3 class="mt-6 text-2xl font-semibold dark:text-white">Workers in San Marino, Andorra, and Monaco enjoy the most vacation and public holidays annually</h3>
      <ul>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">“Workers in San Marino, Andorra, and Monaco enjoy the most vacation and public holidays annually, with 46, 44, and 42 days respectively,” explains the compensation platform, Coverflex.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">On the other hand, Greece is at the bottom with 26 days, followed by Switzerland and Ireland, both with 29 paid days a year. In Spain, workers enjoy 36 paid days off annually.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Twelve of these are national holidays marked by the official calendar, along with two municipal holidays.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The remaining 22 days can increase depending on the collective agreement of each profession. However, these can never be fewer than 22 working days or 30 calendar days.</li>  
      </ul>
      <div class="space-y-3">
        <a href="https://www.ara.ad/societat/andorra-seria-segon-pais-europeu-mes-dies-festius-remunerats_1_5124093.html" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the original article in here</p></a>
      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>