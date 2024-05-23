<template>
  <footer class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
    <div class="sm:flex sm:justify-between sm:items-center">
      <div class="flex items-center gap-x-3">
        <!-- Language Dropdown -->
        <div class="hs-dropdown relative inline-flex [--placement:top-left]">
          <button id="footer-language-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            English
            <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>

          <div class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700" aria-labelledby="footer-language-dropdown">
            <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
              English
            </a>
            <!--<a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
              <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                <path d="M0 0h512v170.7H0z"/>
                <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
              </svg>
              Deutsch
            </a>
            <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
              <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-dk" viewBox="0 0 512 512">
                <path fill="#c8102e" d="M0 0h512.1v512H0z"/>
                <path fill="#fff" d="M144 0h73.1v512H144z"/>
                <path fill="#fff" d="M0 219.4h512.1v73.2H0z"/>
              </svg>
              Dansk
            </a>
            <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
              <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                <g fill-rule="evenodd" stroke-width="1pt">
                  <path fill="#fff" d="M0 0h512v512H0z"/>
                  <path fill="#009246" d="M0 0h170.7v512H0z"/>
                  <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                </g>
              </svg>
              Italiano
            </a>
            <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
              <svg class="w-3 h-3 rounded-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                <defs>
                  <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                </defs>
                <path fill="#de2910" d="M0 0h512v512H0z"/>
                <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/>
                <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/>
                <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/>
                <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/>
                <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/>
              </svg>
              中文 (繁體)
            </a>-->
          </div>
        </div>
        <!-- End Language Dropdown -->

        <div class="space-x-4 text-sm ms-4">
          <a class="inline-flex gap-x-2 text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/cookies">Cookies</a>
          <a class="inline-flex gap-x-2 text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="mailto:hello@andorraconnect.com">Contact</a>
          <a class="inline-flex gap-x-2 text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/sitemap">Sitemap</a>
          <a class="inline-flex gap-x-2 text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/terms-and-conditions">Terms and conditions</a>
          <a class="inline-flex gap-x-2 text-gray-600 hover:text-teal-600 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/privacy">Privacy</a>
        </div>
      </div>

      <div class="flex justify-between items-center">
        <div class="mt-3">
          <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Andorra Connect</a>
          <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-gray-400">© 2024 Andorra Connect.</p>
        </div>
      </div>
      <!-- End Col -->
    </div>
  </div>
</footer>
</template>