<script setup>
import Footer from './Footer.vue';

</script>
<template>
    <!-- Contact Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <div class="max-w-xl mx-auto">
        <div class="text-center">
          <h1
            class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white"
          >
            Contact us
          </h1>
          <p class="mt-1 text-gray-600 dark:text-gray-400">
            We'd love to talk about how we can help you.
          </p>
        </div>
      </div>
  
      <div class="mt-12 max-w-lg mx-auto">
        <!-- Card -->
        <div
          class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700"
        >
          <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
            Fill in the form
          </h2>
  
          <form>
            <div class="grid gap-4 lg:gap-6">
              <!-- Grid -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                <div>
                  <label
                    for="hs-firstname-contacts-1"
                    class="block text-sm text-gray-700 font-medium dark:text-white"
                    >First Name</label
                  >
                  <input
                    type="text"
                    name="hs-firstname-contacts-1"
                    id="hs-firstname-contacts-1"
                    class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  />
                </div>
  
                <div>
                  <label
                    for="hs-lastname-contacts-1"
                    class="block text-sm text-gray-700 font-medium dark:text-white"
                    >Last Name</label
                  >
                  <input
                    type="text"
                    name="hs-lastname-contacts-1"
                    id="hs-lastname-contacts-1"
                    class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  />
                </div>
              </div>
              <!-- End Grid -->
  
              <!-- Grid -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                <div>
                  <label
                    for="hs-email-contacts-1"
                    class="block text-sm text-gray-700 font-medium dark:text-white"
                    >Email</label
                  >
                  <input
                    type="email"
                    name="hs-email-contacts-1"
                    id="hs-email-contacts-1"
                    autocomplete="email"
                    class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  />
                </div>
  
                <div>
                  <label
                    for="hs-phone-number-1"
                    class="block text-sm text-gray-700 font-medium dark:text-white"
                    >Phone Number</label
                  >
                  <input
                    type="text"
                    name="hs-phone-number-1"
                    id="hs-phone-number-1"
                    class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  />
                </div>
              </div>
              <!-- End Grid -->
  
              <div>
                <label
                  for="hs-about-contacts-1"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                  >Details</label
                >
                <textarea
                  id="hs-about-contacts-1"
                  name="hs-about-contacts-1"
                  rows="4"
                  class="border py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                ></textarea>
              </div>
            </div>
            <!-- End Grid -->
  
            <div class="mt-6 grid">
              <button
                type="submit"
                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
              >
                Send inquiry
              </button>
            </div>
  
            <div class="mt-3 text-center">
              <p class="text-sm text-gray-500">
                We'll get back to you in 1-2 business days.
              </p>
            </div>
          </form>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <Footer></Footer>
    <!-- End Contact Us -->
  </template>
  