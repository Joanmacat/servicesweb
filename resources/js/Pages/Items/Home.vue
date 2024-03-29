<script setup>
import Card from "./Card.vue";
import Title from "./Title.vue";
import { ref, computed, onMounted } from 'vue';
import Footer from '../../Components/Footer.vue';
import HomeNavbar from '../../Components/HomeNavbar.vue';

let searchInput = ref("");

const props = defineProps({
    items: Array
  })

const displayedItems = ref([]); // Array de elementos que se mostrarán
const showMore = ref(false); // Estado de "Load more"
let showMoreButtonText = 'Load more';

const loadMore = () => {
  // Añadir los siguientes cinco elementos a displayedItems
  const startIndex = displayedItems.value.length;
  const endIndex = startIndex + 9;
  displayedItems.value = props.items.slice(0, endIndex);
  showMore.value = false; // Mostrar elementos adicionales

  if(displayedItems.value.length < props.items.length) {
    showMoreButtonText = 'Load more'
  } else {
    showMoreButtonText = 'End of list ;_;'
  }
};

onMounted(() => {
  // Inicialmente cargar los primeros cinco elementos
  displayedItems.value = props.items.slice(0, 9);
});

let categoryList = [...new Set(props.items.map(item => item.category_name))];

const servicesList = props.items;

/** filterServices in the input **/

 const filterServices = computed(() => {
   const searchValue = searchInput.value.toLowerCase();

   const titleFiltered = servicesList.filter(({ company_name }) =>
     company_name.toLowerCase().includes(searchValue)
   );

   const categoryFiltered = servicesList.filter(({ category_name }) =>
     category_name.toLowerCase().includes(searchValue)
   );

   return titleFiltered.length > 0 ? titleFiltered : categoryFiltered;
 });

/** Hashtag buttons **/
const hashtagToSearchInput = (value) => {
  searchInput.value = value
}

</script>

<template>
  <HomeNavbar></HomeNavbar>
  <!-- CONTAINER-->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <Title width="200px" height="200px" title="Andorra Connect" subtitle="You are in the right place"></Title>
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
            class="p-3 block w-full border-transparent rounded-md focus:border-teal-600 focus:ring-teal-600 dark:bg-gray-800 dark:text-gray-400"
            placeholder="Connect with 70 available services in Andorra"
          />
        </div>
        <div class="flex-[0_0_auto]">
          <a
            class="p-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-teal-500 text-white hover:bg-teal-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
            href="/"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path d="M22.719 12A10.719 10.719 0 1 1 1.28 12h.838a9.916 9.916 0 1 0 1.373-5H8v1H2V2h1v4.2A10.71 10.71 0 0 1 22.719 12z"/>
              <path fill="none" d="M0 0h24v24H0z"/>
            </svg>
          </a>
        </div>
      </div>
    </form>
    <br />
    <button v-for="item in categoryList" @click="hashtagToSearchInput(item)" type="button" class="mb-6 mr-4 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-teal-600 hover:text-teal-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-400 dark:hover:text-teal-500 dark:hover:border-teal-600 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <a href="#card-grid">{{ item }}</a>
    </button>
    <!-- GRID -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" id="card-grid">

      <!-- Regular card -->  
      <Card
          v-for="(item, index) in displayedItems"
          v-show="searchInput == ''"
          :title="item.company_name"
          :description="item.description"
          :category="item.category_name"
          :image="item.image_url"
          :map="item.map"
          :link="item.url"
        ></Card>
      <!-- Filtered card -->
      <Card
         id="card"
         v-for="item in filterServices"
         v-show="searchInput !== ''"
         :title="item.company_name"
         :description="item.description"
         :category="item.category_name"
         :map="item.map"
         :image="item.image_url"
         :link="item.url"
       ></Card>
      <!-- END GRID -->
    </div>
    <div class="py-8">
      <button v-if="!showMore && items.length > 6" @click="loadMore" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">{{ showMoreButtonText }}</button>
    </div>
    <Footer></Footer>
  </div>
</template>

<style>
  html {
    scroll-behavior: smooth;
  }
</style>
