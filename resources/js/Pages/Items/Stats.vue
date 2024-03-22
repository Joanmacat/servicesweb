<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    items: Array
})

const totalServices = props.items.length;
const advocacyServices = props.items.filter(item => item.category_name === "Advocacy");
const accountantServices = props.items.filter(item => item.category_name === "Accountant");
const bankingServices = props.items.filter(item => item.category_name === "Banking");
const businessServices = props.items.filter(item => item.category_name === "Business");
const consultancyServices = props.items.filter(item => item.category_name === "Consultancy");
const conciergeServices = props.items.filter(item => item.category_name === "Concierge");
const familyofficeServices = props.items.filter(item => item.category_name === "Family Office");
const onboardingServices = props.items.filter(item => item.category_name === "Onboarding");
const realstateServices = props.items.filter(item => item.category_name === "Real State");

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
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Accountants</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ accountantServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of accountant services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Banking</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ bankingServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of banking services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Business</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ businessServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of business services</p>
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
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Concierge</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ conciergeServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of concierge services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Family Office</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ familyofficeServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of family office services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Onboarding</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ onboardingServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of onboarding services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Real State</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ realstateServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of real state services</p>
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