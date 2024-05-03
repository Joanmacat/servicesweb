<script setup>
import Footer from './Footer.vue';
</script>
<template>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">The Blog</h2>
    <p class="mt-1 text-gray-600 dark:text-neutral-400">Learn more about our stories!</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-6 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-flaunts-economic-prowess">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1691162365702-1ad77c1cf647?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Andorra flaunts its economic prowess">
      </div>
      <div class="mt-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          Andorra flaunts its economic prowess: a tangible reality
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          In the present landscape, the Principality of Andorra proudly towers above the European Union's average GDP per capita. Freshly released data from the European Statistical Office, Eurostat, unveils Andorra's substantial lead over the EU and eurozone norms.
        </p>
        <ul class="mt-6 text-xs text-gray-500 dark:text-neutral-500">
            <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
               03/05/2024,&nbsp;
            </li>
            <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">3 min read
            </li>
        </ul>
      </div>
      <div class="mt-6 flex items-center gap-x-3">
        <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-6 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40" href="/andorra-government-ai-ethical-code">
      <div class="aspect-w-16 aspect-h-11">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2006&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
      </div>
      <div class="mt-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
          The Andorran Government approves an ethical code on Artificial Intelligence
        </h3>
        <p class="mt-5 text-gray-600 dark:text-neutral-400">
          The text provides guidelines to both the public and private sectors, as well as to the general population, with the essential resources necessary for the proper deployment of Artificial Intelligence (AI).
        </p>
        <ul class="mt-6 text-xs text-gray-500 dark:text-neutral-500">
            <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
               03/05/2024,&nbsp;
            </li>
            <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">3 min read
            </li>
        </ul>
      </div>
      <div class="mt-6 flex items-center gap-x-3">
        <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
        <div>
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Anna Ludic</h5>
        </div>
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<Footer></Footer>
</template>