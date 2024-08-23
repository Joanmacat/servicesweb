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
                  23/08/2024
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  2 min read
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
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">New Year-Round Flights: Andorra-La Seu d’Urgell to Palma!</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">
            Starting from September 28 and continuing until 2026, regular year-round flights will be available between Andorra-La Seu d’Urgell Airport and Palma Airport.</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">This announcement was made by the government of Andorra, highlighting that the decision was based on the success of the pilot connection with Palma last winter season, <b>which achieved an average flight occupancy of 70%.</b></p>
      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The flights have been awarded to Air Nostrum (Iberia Regional) through a tender process, and the routes will commence from September 28. The schedule and days will vary according to the season, with flights expected on Fridays and Sundays in winter (November-March) and on Saturdays and Tuesdays in summer (April-October).</p>
      
      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://imatges.vilaweb.cat/nacional/wp-content/uploads/2024/01/e23b8170-22fd-4098-b7be-3d809739ab4c-1236x824.jpg" alt="Agreement between andorra and the EU">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          Image caption from <a href="https://www.vilaweb.cat">Vilaweb</a>
        </figcaption>
      </figure>

      <h3 class="mt-6 text-2xl font-semibold dark:text-white">More flights</h3>
      <ul>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Tickets will be sold through the Air Nostrum website, which has already announced that ticket prices will start from 56 euros per flight for Palma, with a 75% discount for residents of the Balearic Islands, as applied by the Spanish government for all international flights from the islands’ airports.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Regarding the annual compensation from the Andorran government to ensure the economic viability of these passenger flights for the awarded years, the executive will offer up to 1.6 million euros annually, a figure that will decrease based on actual occupancy.</li>
      <li class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The economic cost of the flights to Palma during the first three months of the year will be fully covered by the airline, with no additional cost to the Andorran government.</li>
      </ul>
      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">70% Average Occupancy and 2,594 Passengers Transported During the winter season, the flight between La Seu d’Urgell and Palma transported 2,594 passengers with an average occupancy of 70% for all flights.</p>
      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The peak occupancy was 94% in February, with an average of 81%.</p>

      <div class="space-y-3">
        <a href="https://www.vilaweb.cat/noticies/andorra-seu-urgell-palma-ruta-regular/" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the original article in here</p></a>
      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>