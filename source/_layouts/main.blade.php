<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>CryptoBunny</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <style>
          [x-cloak] { display: none !important; }
        </style>
    </head>

    <body class="text-gray-900 font-sans antialiased">
       <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')
  
  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          teal: colors.teal,
          cyan: colors.cyan,
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
 <div class="bg-gray-800 text-gray-900">
    <div class="relative overflow-hidden">
      <header class="relative">
        <div class="bg-gray-900 pt-6 pb-2">
          <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="/" class="flex items-end">
                  <h1 class="text-white text-3xl font-extrabold">CRYPTO</h1>
                  <h1 class=" text-xl font-bold italic text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-400">Bunny</h1>
                </a>
                <div class="-mr-2 flex items-center md:hidden" x-data="{side:false}">
                  <button @click="side=true" type="button" class="bg-gray-900 border-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>

                  <div x-show="side" x-cloak class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                    <div class="absolute bg-gray-800 bg-opacity-80 inset-0 overflow-hidden">
                      <!-- Background overlay, show/hide based on slide-over state. -->
                      <div x-show="side" x-cloak class="absolute inset-0" aria-hidden="true"></div>
                  
                      <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <!--
                          Slide-over panel, show/hide based on slide-over state.
                  
                          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                            From: "translate-x-full"
                            To: "translate-x-0"
                          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                            From: "translate-x-0"
                            To: "translate-x-full"
                        -->
                        <div x-show="side" x-cloak
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full"
                        class="pointer-events-auto w-screen max-w-md">
                          <div class="flex h-full flex-col overflow-y-scroll bg-gray-900 py-6 shadow-xl">
                            <div class="px-4 sm:px-6 ">
                              <div class="flex items-start justify-between ">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                  <a href="/" class="flex items-end border-b">
                                    <h1 class="text-white text-3xl font-extrabold">CRYPTO</h1>
                                    <h1 class=" text-xl font-bold italic text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-400">Bunny</h1>
                                  </a>
                                </h2>
                                <div class="ml-3 flex h-7 items-center">
                                  <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">Close panel</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="relative mt-6 flex-1 px-4 sm:px-6">
                              <!-- Replace with your content -->
                              <div class="absolute inset-0 px-4 sm:px-6">
                                <div class="h-full b border-gray-200" aria-hidden="true">
                                  <div class="mt-5 flex-1  overflow-y-auto">
                                    <nav class="px-2">
                                     
                                      <div class="mt-0">
                                        <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="mobile-teams-headline"></h3>
                                        <div class="mt-1 space-y-1" role="group" aria-labelledby="mobile-teams-headline">
                                          <a href="/emporium" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-300 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                            <span class="truncate"> Bunny Emporium </span>
                                          </a>
                                          <a href="/roadmap" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-300 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                            <span class="truncate"> Roadmap </span>
                                          </a>
                                          <a href="https://johnreynaceda.gitbook.io/untitled/" target="_blank" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-300 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                            <span class="truncate"> White Paper </span>
                                          </a>
                                          <a href="#" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-300 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                            <span class="truncate"> How To Play</span>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <button class="text-white font-bold bg-gradient-to-r from-blue-500 to-green-400 p-2 rounded-md w-full">Play</button>
                                      </div>
                                    </nav>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- /End replace -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="hidden md:flex md:items-center md:space-x-6">
                <div class="hidden space-x-5 md:flex md:ml-10">
                    <a href="/emporium" class="text-base font-medium text-white hover:text-gray-300">Bunny Emporium</a>
      
                    <a href="/roadmap" class="text-base font-medium text-white hover:text-gray-300">Roadmap</a>
      
                    <a href="https://johnreynaceda.gitbook.io/untitled/" target="_blank" class="text-base font-medium text-white hover:text-gray-300">White Paper</a>
      
                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">How to Play</a>
                  </div>
              <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-bold rounded-md text-white bg-gradient-to-r from-blue-500 to-green-400 ">Play</a>
            </div>
          </nav>
        </div>
    
       
        
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
         
        </div>
      </header>
      @yield('body')
      <footer class="bg-gray-900" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-md mx-auto pt-12 px-4 sm:max-w-7xl sm:px-6 lg:pt-16 lg:px-8">
         
          <div class="mt-12 border-t border-gray-200 py-8">
            <p class="text-base text-gray-400 xl:text-center">Copyright © CryptoBunnyGames</p>
          </div>
        </div>
      </footer>
    </div>
  </div> 
  

  
  
 
    </body>
</html>
