<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../../Components/HomeNavbar.vue';
import Footer from '../../Components/Footer.vue';
</script>

<template>
<Head title="Services web project 0.0.1" />
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
                  05/05/2024
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
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">MoraBanc launches the First Bitcoin Fund 🚀💰</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">MoraBanc, the leading bank in Andorra, has launched the innovative Mora Bitcoin Fund FI, the country’s first Bitcoin investment fund.</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">This pioneering product allows qualified investors to access digital assets through traditional systems, with secure custody of the underlying asset. Designed to capitalize on the growing global acceptance of digital assets, the fund offers a regulated and high-quality avenue for investing in this emerging class.</p>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://cdn.morabanc.ad/newssal.jpg" alt="Morabanc launches first bicoin fund">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          Carlos Salinas, Director of Digital Assets and Fintech
        </figcaption>
      </figure>

      <p class="text-lg text-gray-800 dark:text-neutral-200">MoraBanc, unique in its offering of digital asset services in Andorra, includes custody and trading. Its commitment to innovation and security is reflected in the physical investment in Bitcoin, setting it apart from other options in the market. Carlos Salinas, Director of Digital Assets and Fintech, highlights the transparency and traceability of digital assets.</p>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The Technology and Innovation in Digital Asset Management conference, organized by MoraBanc in Andorra la Vella, has introduced this new fund. </p>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1622630998477-20aa696ecb05?q=80&w=1546&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Bitcoin fund">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          Bitcoin become a very interesting asset for those who are looking potential investments
        </figcaption>
      </figure>

      <div class="space-y-3">
        <h3 class="mt-6 text-2xl font-semibold dark:text-white">A new paradigm for the economy</h3>

        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Experts have addressed topics such as regulation, tokenization, and artificial intelligence, emphasizing the opportunities that Andorra provides in this financial realm.</p>
        <a href="https://www.morabanc.ad/sala-de-prensa/morabanc-ofrece-un-fondo-de-inversion-directa-en-bitcoin-en-andorra/" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the original article in here</p></a>

      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>