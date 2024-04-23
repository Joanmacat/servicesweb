<script setup>

import { ref, computed, onMounted } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    items: Object
})

const form = useForm({
    id: '',
    company_name: '',
    category_name: '',
    location: '',
    url: '',
    image_url: '',
    map: '',
    description: '',
});

const searchTerm = ref('');
const itemId = ref();

// Add new item
const addNewItem = () => {
  try {
    if(confirm('Do you want to add the item?')) {
      form.post(route('items.store'));
      toast.success("Item added successfully");
    }
  } catch (error) {
    toast.error("Error during process: ", error);
  }
}

// Delete Item.
const deleteItem = (id) => {
    if(confirm("Do you really want to delete the item?")) {
        form.delete(route('items.destroy', id));
    }
}

const submitUpdateItem = (id) => {
  try {
    if(confirm("Do you really want to update the item?")) {
      form.patch(route('items.update', id));
      toast.warn("Item updated successfully")
    }
  } catch (error) {
    toast.error("Something went wrong: ", error);
  }
}

// Función para filtrar los elementos según el término de búsqueda
const filteredItems = computed(() => {
    const term = searchTerm.value.toLowerCase().trim();
    return props.items.filter(item =>
        item.company_name.toLowerCase().includes(term) ||
        item.category_name.toLowerCase().includes(term) ||
        item.location.toLowerCase().includes(term) ||
        item.url.toLowerCase().includes(term)
    );
});

const isModalOpen = ref(false);
const isUpdateModalOpen = ref(false);

const openModal = () => {
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};

const openUpdateModal = (id) => {
  isUpdateModalOpen.value = true;
  itemId.value = id
  return itemId
};

const updateItem = () => {
  try {
    if(confirm("Do you really want to update the item?")) {
      form.patch(route('items.update', itemId.value));
      toast.warn("Item updated successfully")
    } 
  } catch (error) {
    toast.error("Something went wrong: ", error)
  }
}

const closeUpdateModal = () => {
  isUpdateModalOpen.value = false;
};

</script>

<template>
    <Head title="items" />
    <AuthenticatedLayout>
    <div class="relative p-12 flex items-center">
      <label class="sr-only" for="hs-table-with-pagination-search">Search</label>
      <input v-model="searchTerm" type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 pr-10 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
      <button @click="openModal" id="addnewitem" type="button" class="py-2 px-4 flex items-center bg-teal-500 text-white rounded-lg ml-2 hover:bg-teal-400 focus:outline-none focus:ring focus:border-teal-500">+</button>
    </div>
    
    <!-- ADD NEW ITEM MODAL -->
    <div v-if="isModalOpen" class="modal-backdrop" >
      <div class="w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="mx-auto max-w-2xl sm:max-w-lg sm:w-full m-3 sm:mx-auto">
          <div class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-gray-800 dark:border-gray-700 max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="absolute top-2 end-2 mx-auto max-w-2xl">
            <button type="button" @click="closeModal" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#additem">
              <span class="sr-only">Close</span>
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
          </div>
            <div class="text-center">
              <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white mb-8">
                Add new item
              </h2>
            </div>
            <form @submit.prevent="addNewItem()">
              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-comment-name-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Company name</label
                >
                <input
                  type="text"
                  id="hs-feedback-post-comment-name-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Enter company name"
                  v-model="form.company_name"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  class="block mb-2 text-sm font-medium dark:text-white"
                  for="categories"
                  >Category</label
                >
                <select name="category" placeholder="Select category" id="categories" v-model="form.category_name">
                  <option value="" disabled selected>Select a category</option>
                  <option value="Accountant">Accountant</option>
                  <option value="Advocacy">Advocacy</option>
                  <option value="Banking">Banking</option>
                  <option value="Business">Business</option>
                  <option value="Consultancy">Consultancy</option>
                  <option value="Concierge">Concierge</option>
                  <option value="Family Office">Family Office</option>
                  <option value="Insurance">Insurance</option>
                  <option value="Onboarding">Onboarding</option>
                  <option value="Real Estate">Real Estate</option>
                </select>
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-location-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Location</label
                >
                <input
                  type="text"
                  id="hs-feedback-post-location-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Washington D.C"
                  v-model="form.location"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-url-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >URL</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-url-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="https://www.example.com"
                  v-model="form.url"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-image-input"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Image URL</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-image-input"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="https://www.example.com/image.jpg"
                  v-model="form.image_url"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-map-input"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Map / Contact</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-map-input"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Google Maps, Bing, etc."
                  v-model="form.map"
                  required
                />
              </div>

              <div>
                <label
                  for="hs-feedback-post-comment-textarea-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Description</label
                >
                <div class="mt-1">
                  <textarea
                    id="hs-feedback-post-comment-textarea-1"
                    maxlength="255"
                    name="hs-feedback-post-comment-textarea-1"
                    rows="3"
                    class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Describe briefly your activity"
                    v-model="form.description"
                    required
                  ></textarea>
                </div>
              </div>

              <div class="mt-6 grid space-y-3">
                <input
                  type="submit"
                  class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-all dark:focus:ring-offset-gray-800"
                  value="Submit"
                  required
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ADD NEW ITEM MODAL -->

    <!-- UPDATE ITEM MODAL-->
    <div v-if="isUpdateModalOpen" class="modal-backdrop" >
      <div class="w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="mx-auto max-w-2xl sm:max-w-lg sm:w-full m-3 sm:mx-auto">
          <div class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-gray-800 dark:border-gray-700 max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="absolute top-2 end-2 mx-auto max-w-2xl">
            <button type="button" @click="closeUpdateModal" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#additem">
              <span class="sr-only">Close</span>
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
          </div>
            <div class="text-center">
              <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white mb-8">
                Update item
              </h2>
            </div>
            <form @submit.prevent="updateItem()">
              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-comment-name-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Company name</label
                >
                <input
                  type="text"
                  id="hs-feedback-post-comment-name-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Enter company name"
                  v-model="form.company_name"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  class="block mb-2 text-sm font-medium dark:text-white"
                  for="categories"
                  >Category</label
                >
                <select name="category" placeholder="Select category" id="categories" v-model="form.category_name">
                  <option value="" disabled selected>Select a category</option>
                  <option value="Accountant">Accountant</option>
                  <option value="Advocacy">Advocacy</option>
                  <option value="Banking">Banking</option>
                  <option value="Business">Business</option>
                  <option value="Consultancy">Consultancy</option>
                  <option value="Concierge">Concierge</option>
                  <option value="Family Office">Family Office</option>
                  <option value="Insurance">Insurance</option>
                  <option value="Onboarding">Onboarding</option>
                  <option value="Real Estate">Real Estate</option>
                </select>
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-location-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Location</label
                >
                <input
                  type="text"
                  id="hs-feedback-post-location-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Washington D.C"
                  v-model="form.location"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-url-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >URL</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-url-1"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="https://www.example.com"
                  v-model="form.url"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-image-input"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Image URL</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-image-input"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="https://www.example.com/image.jpg"
                  v-model="form.image_url"
                  required
                />
              </div>

              <div class="mb-4 sm:mb-8">
                <label
                  for="hs-feedback-post-map-input"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Map</label
                >
                <input
                  type="url"
                  id="hs-feedback-post-map-input"
                  class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                  placeholder="Google Maps, Bing, etc."
                  v-model="form.map"
                  required
                />
              </div>

              <div>
                <label
                  for="hs-feedback-post-comment-textarea-1"
                  class="block mb-2 text-sm font-medium dark:text-white"
                  >Description</label
                >
                <div class="mt-1">
                  <textarea
                    id="hs-feedback-post-comment-textarea-1"
                    maxlength="255"
                    name="hs-feedback-post-comment-textarea-1"
                    rows="3"
                    class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-teal-500 focus:ring-teal-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Describe briefly your activity"
                    v-model="form.description"
                    required
                  ></textarea>
                </div>
              </div>

              <div class="mt-6 grid space-y-3">
                <input
                  type="submit"
                  class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-all dark:focus:ring-offset-gray-800"
                  value="Submit"
                  required
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- UPDATE ITEM MODAL END-->

    <!-- INDEX CONTENT -->
    <div class="p-12 flex flex-col bg-white">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Item ID</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Company name</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Category</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Location</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">URL</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Map</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr v-for="item in filteredItems" :key="item.id">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ item.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ item.company_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ item.category_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ item.location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a :href="item.url" target="_blank" rel="noreferrer">See URL</a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a :href="item.map" target="_blank" rel="noreferrer">See Map</a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button" @click="openUpdateModal(item.id)" class="mr-4 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-100 text-yellow-800 hover:bg-yellow-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-yellow-900 dark:text-yellow-500 dark:hover:text-yellow-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Edit</button>
                        <button type="button" @click="deleteItem(item.id)" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-100 text-red-800 hover:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
        </AuthenticatedLayout>
        <!-- END INDEX CONTENT -->
</template>
<style scoped>
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  background: none;
  border: none;
  cursor: pointer;
}
</style>
