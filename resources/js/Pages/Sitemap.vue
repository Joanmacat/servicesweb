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
        <li><a href="/" class="mb-6 text-teal-500 hover:text-teal-700">- Home</a></li>
        <li><a href="/about" class="mb-6 text-teal-500 hover:text-teal-700">- About</a></li>
        <li><a href="/blog" class="mb-6 text-teal-500 hover:text-teal-700">- Blog</a></li>
        
        <li><a href="/andorra-government-ai-ethical-code" class="text-teal-500 hover:text-teal-700">-- Andorran Government approves an ethical code on Artificial Intelligence</a></li>
        <li><a href="/andorra-flaunts-economic-prowess" class="text-teal-500 hover:text-teal-700">-- Andorra flaunts its economic prowess: a tangible reality</a></li>
        <li><a href="/morabanc-launches-first-bitcoin-fund" class="text-teal-500 hover:text-teal-700">-- MoraBanc launches the First Bitcoin Fund</a></li>
        <li><a href="/fitch-ratings-andorra-inflation-2024" class="text-teal-500 hover:text-teal-700">-- Andorra’s Economic Outlook: Balancing Inflation and Growth</a></li>
        <li><a href="/andorra-house-prices-breaks-records" class="text-teal-500 hover:text-teal-700">-- Andorra’s Soaring House Prices</a></li>
        <li><a href="/andorra-banking-renaissance" class="text-teal-500 hover:text-teal-700">-- Andorra’s Banking Renaissance: A Tale of Transformation and Global Ambitions</a></li>
        <li><a href="/andorra-sign-association-agreement" class="text-teal-500 hover:text-teal-700">-- EU and Andorra Set to Sign Association Agreement: Strengthening Ties and Opening New Opportunities</a></li>
        <li><a href="/retiring-in-andorra" class="text-teal-500 hover:text-teal-700">-- Retiring in Andorra: A Haven for Tranquility and Financial Advantage</a></li>
        <li><a href="/andorra-digital-content-creators" class="text-teal-500 hover:text-teal-700">-- Why Andorra is a Top place for Digital Content Creators</a></li>
        <li><a href="/eu-agreement-should-facilitate-the-internationalization" class="text-teal-500 hover:text-teal-700">-- The EU Agreement Should “Facilitate the Internationalization” of Andorran Companies.</a></li>
        <li><a href="/women-rights-in-andorra" class="text-teal-500 hover:text-teal-700">-- Advancing Women’s Rights in Andorra</a></li>
        
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