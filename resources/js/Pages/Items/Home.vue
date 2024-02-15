<script setup>
import Card from "./Card.vue";
import Title from "./Title.vue";
import { ref, computed } from 'vue';
import HomeNavbar from '../../Components/HomeNavbar.vue';

let searchInput = ref("");

const props = defineProps({
    items: Object
})

//const categoryList = [...new Set(props.items.map(item => item.category_name))];

const servicesList = props.items;

/** filterServices in the input **/

// const filterServices = computed(() => {
//   const searchValue = searchInput.value.toLowerCase();

//   const titleFiltered = servicesList.filter(({ company_name }) =>
//     company_name.toLowerCase().includes(searchValue)
//   );

//   const categoryFiltered = servicesList.filter(({ category_name }) =>
//     category_name.toLowerCase().includes(searchValue)
//   );

//   return titleFiltered.length > 0 ? titleFiltered : categoryFiltered;
// });

/** Hashtag buttons **/
const hashtagToSearchInput = (value) => {
  searchInput.value = value
}

</script>

<template>
  <HomeNavbar></HomeNavbar>
  <!-- CONTAINER-->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <Title></Title>
    <!-- Form -->
    <form>
      <div
        class="relative z-10 flex space-x-3 p-2 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-900/[.2]"
      >
        <div class="flex-[1_0_0%]">
          <label
            for="hs-search-article-1"
            class="block text-sm text-gray-700 font-medium dark:text-white"
            ><span class="sr-only">Search your service</span></label
          >
          <input
            type="search"
            v-model="searchInput"
            name="hs-search-article-1"
            id="hs-search-article-1"
            class="p-3 block w-full border-transparent rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-400"
            placeholder="Search your service"
          />
        </div>
        <div class="flex-[0_0_auto]">
          <a
            class="p-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
            href="#"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              />
            </svg>
          </a>
        </div>
      </div>
    </form>
    <br />
    <!--<button v-for="item in items" @click="hashtagToSearchInput(item)" type="button" class="mb-6 mr-4 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <a href="#card-grid">#{{ item }}</a>
    </button>-->
    <!-- GRID -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" id="card-grid">

      <!-- Regular card -->  
      <Card
          v-for="item in items.data"
          v-show="searchInput == ''"
          class="card-hidden"
          :title="item.company_name"
          :description="item.description"
          :category="item.category_name"
          :image="item.image_url"
          :link="item.url"
        ></Card>
      <!-- Filtered card -->
      <Card
         id="card"
         class="card-hidden"
         v-for="item in filterServices"
         v-show="searchInput !== ''"
         :title="item.company_name"
         :description="item.description"
         :category="item.category_name"
         :image="item.image_url"
         :link="item.url"
       ></Card>
      <!-- END GRID -->
    </div>
    <!-- END CONTAINER -->
      <!-- Pagination -->
      <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
  <div class="flex flex-1 justify-between sm:hidden">
    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
  </div>
  <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
    <div>
      <p class="text-sm text-gray-700">
        Showing
        <span class="font-medium">{{ items.to }}</span>
        of
        <span class="font-medium">{{ items.total }}</span>
        results
      </p>
    </div>
    <div>
      <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
        <a :href="items.prev_page_url" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
          <span class="sr-only">Previous</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
          </svg>
        </a>
        <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
        <a href="?page=1" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
        <a href="?page=2" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
        <a href="?page=3" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
        <a href="?page=4" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">4</a>
        <a href="?page=5" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">5</a>
        <a href="?page=6" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">6</a>
        <a :href="items.next_page_url" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
          <span class="sr-only">Next</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
          </svg>
        </a>
      </nav>
    </div>
  </div>
</div>

  <!-- End Pagination -->
  </div>
</template>
<style>
  html {
    scroll-behavior: smooth;
  }

</style>
