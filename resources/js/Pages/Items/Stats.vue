<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
<<<<<<< HEAD
import { Head } from '@inertiajs/vue3';
=======
>>>>>>> origin/HEAD

const props = defineProps({
    items: Array
})
<<<<<<< HEAD

const totalServices = props.items.length;
const advocacyServices = props.items.filter(item => item.category_name === "Advocacy");
const accountantServices = props.items.filter(item => item.category_name === "Accountant");
const consultancyServices = props.items.filter(item => item.category_name === "Consultancy");

</script>
<template>
    <Head title="Stats" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Statistics</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Features -->
                        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                        <!-- Grid -->
                        <div class="grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Total services</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ totalServices }}</p>
                            <p class="mt-1 text-gray-500">Number of services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Advocacy</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ advocacyServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of advocacy services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Consultancy</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ consultancyServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of consultancy services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Accountants</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ accountantServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of accountant services</p>
                            </div>
                            <!-- End Stats -->
                        </div>
                        <!-- End Grid -->
                        </div>
                        <!-- End Features -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
=======
let services = props.items
let totalServices = props.items.length
let advocacyServices = services.filter(item => item.category_name === "Advocacy").length;
let accountantServices = services.filter(item => item.category_name === "Accountant").length;
let assessmentServices = services.filter(item => item.category_name === "Assessment").length;


</script>

<template>
<AuthenticatedLayout>
  <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard Stats</h2>
  </template>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
              <!-- Grid -->
              <div class="grid items-center lg:grid-cols-12 gap-6 lg:gap-12">
                <div class="lg:col-span-4">
                  <!-- Stats -->
                  <div class="lg:pe-6 xl:pe-12">
                    <p class="text-6xl font-bold leading-10 text-teal-600">
                      {{ totalServices }}
                      <span class="ms-1 inline-flex items-center gap-x-1 bg-gray-200 font-medium text-gray-800 text-xs leading-4 rounded-full py-0.5 px-2 dark:bg-gray-800 dark:text-gray-300">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                        +0% this month
                      </span>
                    </p>
                    <p class="mt-2 sm:mt-3 text-gray-500">Total number of services</p>
                  </div>
                  <!-- End Stats -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-8 relative lg:before:absolute lg:before:top-0 lg:before:-start-12 lg:before:w-px lg:before:h-full lg:before:bg-gray-200 lg:before:dark:bg-gray-700">
                  <div class="grid gap-6 grid-cols-2 md:grid-cols-4 lg:grid-cols-3 sm:gap-8">
                    <!-- Stats -->
                    <div>
                      <p class="text-3xl font-semibold text-teal-600">{{ advocacyServices }}</p>
                      <p class="mt-1 text-gray-500">Advocacy services</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div>
                      <p class="text-3xl font-semibold text-teal-600">{{ accountantServices }}</p>
                      <p class="mt-1 text-gray-500">Accountant services</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div>
                      <p class="text-3xl font-semibold text-teal-600">{{ assessmentServices }}</p>
                      <p class="mt-1 text-gray-500">Assessment services</p>
                    </div>
                    <!-- End Stats -->
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Grid -->
            </div>
          </div>
        </div>
</div>
<!-- End Features -->
</AuthenticatedLayout>
>>>>>>> origin/HEAD
</template>