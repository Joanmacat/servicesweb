<script setup>
import Footer from './Footer.vue';
</script>
<template>
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">The Blog</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Discover all everything about our stories</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-considering-charging-foreign-cars">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1499933567928-f3385659fc54?q=80&w=2743&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Integration of Transport between Spain and Andorra into European Regulation">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         Andorra is considering charging foreign cars that wish to enter the country
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          The country is proposing a bill to address the massive influx of tourists by implementing a fee, in the form of a vignette, for foreign vehicles driving within its borders. The aim of this new measure is to curb the overwhelming tourism, after nearly 10 million visitors were recorded in 2023.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 19/08/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          5 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-eu-transport-integration">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1592838064575-70ed626d3a0e?q=80&w=2018&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Integration of Transport between Spain and Andorra into European Regulation">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         Integration of Transport between Spain and Andorra into European Regulation
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Until now, the regulation of transport between Spain and Andorra was governed by a bilateral agreement signed in 2015, which required a specific authorization to carry out the transport of goods between the two countries.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 29/07/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          1 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/agreement-between-andorra-eu">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://cdn.pixabay.com/photo/2024/05/24/09/54/andorra-views-8784685_960_720.jpg" alt="Agreement between andorra and the EU">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         AR+I Sees a Positive Impact of the Agreement Between Andorra and the EU on Economic Growth
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Yvan Lara, the coordinator of the political analysis group Andorra Recerca i Innovació (AR+I), stated on Tuesday that there is a “clearly positive impact” from the agreement between Andorra and the European Union on the economic growth of the Principality
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 17/07/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          4 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/health-tourism-in-andorra">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2120&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Health tourism in Andorra">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         Health tourism in Andorra
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Nestled amidst the Pyrenees mountains, Andorra is a natural haven for health and well-being. The concept of health tourism has gained prominence, attracting individuals seeking a harmonious blend of health, sports, and outdoor activities. Let’s explore why Andorra is an ideal destination for medical treatments.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 03/07/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/women-rights-in-andorra">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1520785145672-94e9abd8b121?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Women rights in Andorra">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         Advancing Women’s Rights in Andorra
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Andorra, nestled between France and Spain, is a small European country that has made significant strides in ensuring equal opportunities and protections for women under the law. Central to this effort are various pieces of legislation aimed at combating discrimination, preventing violence, and promoting gender parity across different spheres of society.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 01/07/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          5 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/eu-agreement-should-facilitate-the-internationalization">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1of89H.img?w=640&h=464&m=6" alt="Andorra digital creators">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
         The EU Agreement Should “Facilitate the Internationalization” of Andorran Companies.
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          The Prime Minister of Andorra, Xavier Espot, has stated that the association agreement with the European Union, which will be voted on in a referendum in 2025, should “facilitate the internationalization” of Andorran companies.</p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 20/06/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-digital-content-creators">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1516392808102-5a95cfaed210?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra digital creators">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Why Andorra is a Top place for Digital Content Creators
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          In the heart of the Pyrenees lies Andorra, a small principality known for its ski resorts and tax-haven status. But beyond the snow-capped mountains and duty-free shopping, Andorra is becoming a magnet for digital content creators like YouTubers, influencers, and online entrepreneurs.</p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 27/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/retiring-in-andorra">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1614678096587-0ad50faf1603?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Retiring in Andorra">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Retiring in Andorra: A Haven for Tranquility and Financial Advantage
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Beyond its allure for investors seeking to establish businesses due to its numerous benefits, Andorra also emerges as a tranquil and advantageous destination for retirement. Retiring in Andorra unveils a treasure trove of advantages, ranging from favorable economic conditions to an exceptional quality of life.</p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 23/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          7 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-sign-association-agreement">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1625440153141-1ae4c27ff33b?q=80&w=2090&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra sign association agreement">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          EU and Andorra Set to Sign Association Agreement: Strengthening Ties and Opening New Opportunities” 🌍 🤝
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          The European Commission has officially ratified its intention to sign the association agreement with Andorra before the end of this year. After thorough technical and legal review of the negotiated text of the association agreement involving Andorra, San Marino, and the EU, the European Commission considers the negotiations concluded.        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 10/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-banking-renaissance">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1462206092226-f46025ffe607?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra banking renaissance">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Andorra’s Banking Renaissance: A Tale of Transformation and Global Ambitions 🌟 🏦 🌎
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Andorra’s banking market may be small in size, but it punches well above its weight. The banking sector is a cornerstone of the country’s economy, providing essential services to residents and international clients alike. However, this seemingly tranquil industry has faced seismic shifts, forcing banks to rethink their strategies and embrace change.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          5 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-house-prices-breaks-records">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1611917438110-62aafafa28bc?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra house prices breaks records">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Andorra’s Soaring House Prices
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Andorra, nestled in the heart of the Pyrenees, is making waves in the real estate market. House prices have skyrocketed, setting all-time highs as demand surges. Let’s dive into the numbers and explore this fascinating trend.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          5 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/fitch-ratings-andorra-inflation-2024">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1612731609111-67ba5b8e4ad5?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra flaunts economic prowess">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Andorra’s Economic Outlook: Balancing Inflation and Growth
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          Fitch Ratings foresees an average inflation rate of 3.8% for Andorra in 2024, but with a risk of further escalation.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/morabanc-launches-first-bitcoin-fund">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://cdn.morabanc.ad/newssal.jpg" alt="Andorra flaunts economic prowess">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Morabanc launches the first bitcoin fund
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          MoraBanc, the leading bank in Andorra, has launched the innovative Mora Bitcoin Fund FI, the country’s first Bitcoin investment fund.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-flaunts-economic-prowess">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1691162365702-1ad77c1cf647?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra flaunts economic prowess">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Andorra flaunts its economic prowess: a tangible reality
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          In the present landscape, the Principality of Andorra proudly towers above the European Union's average GDP per capita. Freshly released data from the European Statistical Office, Eurostat, unveils Andorra's substantial lead over the EU and eurozone norms.
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-government-ai-ethical-code">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2006&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          The Andorran Government approves an ethical code on Artificial Intelligence
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          The text provides guidelines to both the public and private sectors, as well as to the general population, with the essential resources necessary for the proper deployment of Artificial Intelligence (AI).
        </p>
      </div>
      <ul class="mb-6 text-xs text-gray-500 dark:text-neutral-500">
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          Published: 08/05/2024
        </li>
        <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
          3 min read
         </li>
      </ul>
      <div class="mt-auto flex items-center gap-x-3">
        <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
<Footer></Footer> 
</template>