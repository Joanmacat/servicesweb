<script setup>
const props = defineProps({
  title: String,
  description: String,
  category: String,
  location: String,
  image: String,
  link: String,
  contact: String,
  map: String,
  newDeal: Boolean,
});
</script>

<template>
  <!-- Card -->
  <div
    class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]"
  >
    <div class="h-auto flex flex-col justify-center items-center rounded-t-xl pt-6">
      <img :src="image" class="rounded-t-xl w-52 h-auto" />
    </div>
    <div class="p-4 md:p-6">
      <span
        class="block mb-1 text-xs font-semibold uppercase text-teal-600 dark:text-teal-500"
      >
        {{ props.category }}
      </span>
      <h3
        class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white"
      >
        {{ props.title }}
      </h3>
      <p class="mt-3 text-gray-500">
        {{ props.description }}
      </p>
    </div>
    <div
      class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700"
    >
      <a
        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        :href="link"
        target="_blank"
      >
        Website
      </a>
      <a
        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-teal-500 text-white shadow-sm hover:bg-teal-400 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        :href="map"
        target="_blank"
      >
        <b>Contact</b>
      </a>
    </div>
  </div>
  <!-- End Card -->
</template>
