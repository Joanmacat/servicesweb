<script setup>
import { ref, computed } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AddNewItem from './AddNewItem.vue';
import UpdateItem from './UpdateItem.vue';

const props = defineProps({
    items: Object
})

const form = useForm({
    id: ''
});

const searchTerm = ref('');

const itemId = ref();
const deleteItem = (id) => {
    if(confirm("Do you really want to delete the item?")) {
        form.delete(route('items.destroy', id));
    }
}

const updateItem = (id) => {
    itemId.value = id
    return itemId
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

</script>

<template>
    <Head title="items" />
    <AuthenticatedLayout>
    <div class="p-12 flex flex-col bg-white">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                <div class="py-3 px-4">
                <div class="relative max-w-xs">
                    <label class="sr-only" for="hs-table-with-pagination-search">Search</label>
                    <input v-model="searchTerm" type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <button type="button" class="absolute inset-y-0 end-0 px-3 flex items-center bg-blue-500 text-white rounded-r-lg hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300" data-hs-overlay="#additem">Add new item</button>
                </div>
                </div>
                <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ item.company_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ item.category_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ item.location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a :href="item.url" target="_blank">See URL</a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a :href="item.map" target="_blank">See Map</a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button" @click="updateItem(item.id)" data-hs-overlay="#updateitem" class="mr-4 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-100 text-yellow-800 hover:bg-yellow-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-yellow-900 dark:text-yellow-500 dark:hover:text-yellow-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Edit</button>
                        <button type="button" @click="deleteItem(item.id)" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-100 text-red-800 hover:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                        </td>
                        <UpdateItem :id="itemId"></UpdateItem>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
        <AddNewItem></AddNewItem>
        </AuthenticatedLayout>
</template>