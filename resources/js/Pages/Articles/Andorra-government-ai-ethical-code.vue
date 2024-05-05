<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavbar from '../../Components/HomeNavbar.vue';
import Footer from '../../Components/Footer.vue';
</script>

<template>
<Head title="Services web project 0.0.1" />
<HomeNavbar></HomeNavbar>
<!-- Blog Article -->
<div class="max-w-2xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl place-content-center">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="flex-shrink-0 p-6">
          <img class="w-7 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Anna Ludic">
        </div>

        <div class="grow">
          <div class="flex justify-between items-center gap-x-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">
                    Anna Ludic
                  </span>

                  <!-- Dropdown Card -->
                  <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                  </div>
                  <!-- End Dropdown Card -->
                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500 dark:text-neutral-500">
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  03/05/2024
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  3 min read
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Avatar Media -->

    <!-- Content -->
    <div class="space-y-5 md:space-y-8">
      <div class="space-y-3">
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">The Andorran Government approves an ethical code on Artificial Intelligence</h2>

        <p class="text-lg text-gray-800 dark:text-neutral-200">The text provides guidelines to both the public and private sectors, as well as to the general population, with the essential resources necessary for the proper deployment of Artificial Intelligence (AI).</p>
      </div>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">With the aim of promoting proper usage and facilitating the basic elements required to interact with the new AI-based tools, the Government has approved a set of ethical principles on AI usage.</p>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2006&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          A robot hand.
        </figcaption>
      </figure>

      <p class="text-lg text-gray-800 dark:text-neutral-200">This document, aimed at both the public and private sectors and the general populace, aims to serve as a guide by providing some guidelines and recommendations to support a reliable implementation of AI in Andorra.</p>

      <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">Also the text is in line with the recommendations of various international organizations (such as the United Nations, UNESCO, or the Council of Europe, among others) that have already presented similar working documents to those now approved in the country.</p>

      <blockquote class="text-center p-4 sm:px-7">
        <p class="mt-6 text-xl font-medium text-gray-800 md:text-2xl md:leading-normal xl:text-2xl xl:leading-normal dark:text-neutral-200">
          "This is a first step in the path of this new technology, laying some groundwork for future regulatory development that can be coordinated with legislation from neighboring countries and globally."
        </p>
        <p class="mt-5 text-gray-800 dark:text-neutral-200">
          Marc Rossell, Secretary of State for Digital Transformation and Telecommunications.
        </p>
      </blockquote>

      <figure class="mt-6 mb-6">
        <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1546616722-2b46187dd255?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
        <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
          The Andorran superb attracts crowds of people from all over the world.
        </figcaption>
      </figure>

      <div class="space-y-3">
        <h3 class="mt-6 text-2xl font-semibold dark:text-white">Bringing the culture of sharing to everyone</h3>

        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The aim of the set of principles is to harness the full potential associated with this emerging technology for socio-economic development while ensuring the fundamental rights and freedoms of affected individuals are guaranteed, placing them at the center of development.</p>
        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">It is expected that both the document and the accompanying recommendations will be disseminated among different target audiences so they can integrate the suggestions they deem appropriate. Adherence to the set of principles will be mandatory for the public sector in certain processes, while it will be voluntary for the rest of the actors involved.</p>
        <p class="mt-6 text-lg text-gray-800 dark:text-neutral-200">The Government's 2020-2030 digitalization strategy, developed through the Andorra Digital Transformation Program, already emphasizes the importance of establishing a responsible and sustainable digital transformation, with the orderly adoption of key emerging technologies for the country's socio-economic development, such as Artificial Intelligence.</p>
        <a href="https://andorra-digital.com/images/pdf/recursos/codi%20etic%20IA.pdf" target="_blank"><p class="mt-6 text-lg text-gray-800 dark:text-neutral-200 underline decoration-2">Check the ethical code in here.</p></a>

      </div>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->
<Footer></Footer>
</template>