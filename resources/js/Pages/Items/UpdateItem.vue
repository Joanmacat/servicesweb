<script setup>
import { useForm } from '@inertiajs/vue3';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
  id: ''
});

const form = useForm({
    id: '',
    company_name: '',
    category_name: '',
    location: '',
    url: '',
    image_url: '',
    description: '',
})

const updateItem = (id) => {
  try {
    if(confirm("Do you really want to update the item?")) {
      form.patch(route('items.update', id));
      toast.warn("Item updated successfully")
    } 
  } catch (error) {
    toast.error("Something went wrong: ", error);
  }
}

</script>

<template>
<div id="updateitem" class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
  <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="mx-auto max-w-2xl">
      <!-- Card -->
      <div
        class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-gray-800 dark:border-gray-700"
      >
      <div class="absolute top-2 end-2">
        <button type="button" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#updateitem">
          <span class="sr-only">Close</span>
          <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
        <div class="text-center">
          <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white mb-8">
            Update Item
          </h2>
        </div>
        <form @submit.prevent="updateItem(props.id)">
          <div class="mb-4 sm:mb-8">
            <label
              for="hs-feedback-post-comment-name-1"
              class="block mb-2 text-sm font-medium dark:text-white"
              >Company name</label
            >
            <input
              type="text"
              id="hs-feedback-post-comment-name-1"
              class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
              placeholder="Enter company name"
              v-model="form.company_name"
              required
            />
          </div>

          <div class="mb-4 sm:mb-8">
            <label
              for="hs-feedback-post-category-1"
              class="block mb-2 text-sm font-medium dark:text-white"
              >Category</label
            >
            <select name="cars" id="cars" v-model="form.category_name">
              <option value="" disabled selected>Select a category</option>
              <option value="Accountant">Accountant</option>
              <option value="Assessment">Assessment</option>
              <option value="Advocacy">Advocacy</option>
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
              class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
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
              class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
              placeholder="https://www.example.com"
              v-model="form.url"
              required
            />
          </div>

          <div class="mb-4 sm:mb-8">
            <label
              for="hs-feedback-post-image-url-1"
              class="block mb-2 text-sm font-medium dark:text-white"
              >Image URL</label
            >
            <input
              type="url"
              id="hs-feedback-post-image-url-1"
              class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
              placeholder="https://www.example.com/image.jpg"
              v-model="form.image_url"
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
                name="hs-feedback-post-comment-textarea-1"
                rows="3"
                class="py-3 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                placeholder="Describe briefly your activity"
                v-model="form.description"
                required
              ></textarea>
            </div>
          </div>

          <div class="mt-6 grid space-y-3">
            <input
              type="submit"
              class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all dark:focus:ring-offset-gray-800"
              value="Update"
              required
            />
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
  </div>
</div>
</template>