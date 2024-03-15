<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    items: Array
})

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
</template>