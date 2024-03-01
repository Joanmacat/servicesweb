<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../Components/HomeNavbar.vue';
import Footer from '../Components/Footer.vue';

</script>

<template>
    <Head title="Services web project 0.0.1" />
    <HomeNavbar></HomeNavbar>
    <!-- FAQ -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2
          class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white"
        >
          Sitemap
        </h2>
        <p class="mt-1 text-gray-600 dark:text-gray-400">
          Andorra Connect's sitemap
        </p>
      </div>
      <!-- End Title -->
      <p class="mt-1 text-gray-600 dark:text-gray-400 text-2xl font-bold">Pages</p>
      <ul class="mt-4">
        <li><a href="/" class="text-teal-500 hover:text-teal-700">- Home</a></li>
        <li><a href="/about" class="text-teal-500 hover:text-teal-700">- About</a></li>
        <li><a href="/contact" class="text-teal-500 hover:text-teal-700">- Contact</a></li>
        <li><a href="/cookies" class="text-teal-500 hover:text-teal-700">- Cookies</a></li>
        <li><a href="/sitemap" class="text-teal-500 hover:text-teal-700">- Sitemap</a></li>
        <li><a href="/terms-and-conditions" class="text-teal-500 hover:text-teal-700">- Terms and Conditions</a></li>
        <li><a href="/privacy" class="text-teal-500 hover:text-teal-700">- Privacy</a></li>
      </ul>
    </div>
    <Footer></Footer>
    <!-- End FAQ -->
  </template>