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

/** HEALTH SERVICES **/
const dentistServices = props.items.filter(item => item.category_name === "Dentist");
const generalmedicineServices = props.items.filter(item => item.category_name === "General medicine");
const gynecologistServices = props.items.filter(item => item.category_name === "Gynecologist");
const neurologistServices = props.items.filter(item => item.category_name === "Neurologist");
const ophtalmologistServices = props.items.filter(item => item.category_name === "Ophtalmologist");
const physiotherapistServices = props.items.filter(item => item.category_name === "Physiotherapist");
const mentalhealthServices = props.items.filter(item => item.category_name === "Mental health");
const rheumatologistServices = props.items.filter(item => item.category_name === "Rheumatologist");
const pediatricianServices = props.items.filter(item => item.category_name === "Pediatrician");
const traumatologistServices = props.items.filter(item => item.category_name === "Traumatologist");
/** END HEALTH SERVICES **/

const familyofficeServices = props.items.filter(item => item.category_name === "Family Office");
const onboardingServices = props.items.filter(item => item.category_name === "Onboarding");
const realstateServices = props.items.filter(item => item.category_name === "Real Estate");
const insuranceServices = props.items.filter(item => item.category_name === "Insurance");


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
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Concierge</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ conciergeServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of concierge services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Dentist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ dentistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of dentist services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">General medicine</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ generalmedicineServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of general medicine services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Gynecologist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ gynecologistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of gynecologists services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Neurologist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ neurologistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of neurologists services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Ophtalmologist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ ophtalmologistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of ophtalmologists services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Physiotherapist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ physiotherapistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of physiotherapists services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Mental health</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ mentalhealthServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of mental health services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Rheumatologist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ rheumatologistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of rheumatologists services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Pediatrician</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ pediatricianServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of pediatricians services</p>
                            </div>
                            <!-- End Stats -->

                            <!-- Stats -->
                            <div>
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Traumatologist</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ traumatologistServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of traumatologists services</p>
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
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Insurance</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ insuranceServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of insurance services</p>
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
                            <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-200">Real Estate</h4>
                            <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-teal-600">{{ realstateServices.length }}</p>
                            <p class="mt-1 text-gray-500">Number of real estate services</p>
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