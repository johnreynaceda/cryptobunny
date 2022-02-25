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
<div class="bg-white text-gray-900">
    <div class="relative overflow-hidden">
      <header class="relative">
        <div class="bg-gray-900 pt-6 pb-2">
          <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#" class="flex items-end">
                  {{-- <span class="sr-only">Workflow</span> --}}
                  {{-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-teal-200-cyan-400.svg" alt=""> --}}
                  <h1 class="text-white text-3xl font-extrabold">CRYPTO</h1>
                  <h1 class=" text-xl font-bold italic text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-400">Bunny</h1>
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
             
            </div>
            <div class="hidden md:flex md:items-center md:space-x-6">
                <div class="hidden space-x-5 md:flex md:ml-10">
                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">Bunny Emporium</a>
      
                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">Roadmap</a>
      
                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">White Paper</a>
      
                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">How to Play</a>
                  </div>
              <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-bold rounded-md text-white bg-gradient-to-r from-blue-500 to-green-400 ">Play</a>
            </div>
          </nav>
        </div>
  
        <!--
          Mobile menu, show/hide based on menu open state.
  
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
          {{-- <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-teal-500-cyan-600.svg" alt="">
              </div>
              <div class="-mr-2">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="pt-5 pb-6">
              <div class="px-2 space-y-1">
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">Bunny Emporium</a>
      
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">Roadmap</a>
  
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">White Paper</a>
  
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">How to Play</a>
              </div>
              <div class="mt-6 px-5">
                <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700">Start free trial</a>
              </div>
              <div class="mt-6 px-5">
                <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="#" class="text-gray-900 hover:underline">Login</a></p>
              </div>
            </div>
          </div> --}}
        </div>
      </header>
      <main>
        <div class="pt-10 bg-gray-700 sm:pt-16 lg:pt-0 lg:pb-0 lg:overflow-hidden">
          <div class="mx-auto max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                <div class="lg:py-24">
                  
                  <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-5xl">
                  <div class="flex items-end border-b">
                      <h1>CRYPTO</h1>
                      <h1 class="text-2xl italic mr-5 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-400">Bunny</h1>
                      <h1 class="text-4xl"> Games</h1>
                  </div>
                   
                  </h1>
                  <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-lg">Build your crypto bunny and win battles to earn tokens!</p>
                  <div class="mt-20">
                    <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">
                      <a href="#" class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-blue-600 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather bg-white rounded-full p-0.5 text-blue-500 feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        <span>Facebook</span>
                    </a>
                      <a href="#" class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-blue-400 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather  fill-current p-0.5 feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        <span>Twitter</span>
                    </a>
                      <a href="#" class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-gray-800 p-2">
                        <svg width="25px" height="25px" viewBox="0 -28.5 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                            <g>
                                <path d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z" fill="#ffff" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <span>Discord</span>
                    </a>
                  
                    
                    </ul>
                  </div>

                  <div class="mt-10 flex items-center flex-col">
                      <h1 class="underline text-white text-4xl font-bold">The Game is live!</h1>
                      <h1 class="text-white text-lg font-semibold mt-5">$CRB Token Address:</h1>
                      <a href="#" class="text-white underline text-lg ">0x158b972Ed36554AD09ee1c61250FfD318bB71Fcb</a>
                  </div>
                </div>
              </div>
              <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                  <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                  <img class="w-full lg:absolute border-l-2 border-blue-500 lg:inset-y-0 rounded-l-3xl lg:left-0 lg:h-full lg:w-auto shadow-4xl lg:max-w-none" src="https://images-na.ssl-images-amazon.com/images/I/71AWssVEjBL._RI_.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Feature section with screenshot -->
        <div class="relative bg-gray-900 pt-16 sm:pt-24 lg:pt-0">
          <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
            <div class="bg-black border-l-2 border-r-2 border-blue-500 flex justify-center">
                <img src="{{$page->baseUrl}}/assets/images/road_map.jpg" alt="">
            </div>
          
          </div>
        </div>
  
        <!-- Feature section with grid -->
        <div class="relative bg-gray-700 py-16 sm:py-24 lg:py-6">
          <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class=" text-xl font-bold tracking-wider text-white uppercase">Features</h2>
            <div class="mt-12">
              <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="pt-6">
                  <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <div class="-mt-6">
                      <div>
                        <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                          <!-- Heroicon name: outline/cloud-upload -->
                          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                          </svg>
                        </span>
                      </div>
                      <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                      <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                  </div>
                </div>
                <div class="pt-6">
                  <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <div class="-mt-6">
                      <div>
                        <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                          <!-- Heroicon name: outline/cloud-upload -->
                          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                          </svg>
                        </span>
                      </div>
                      <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                      <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                  </div>
                </div>
                <div class="pt-6">
                  <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <div class="-mt-6">
                      <div>
                        <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                          <!-- Heroicon name: outline/cloud-upload -->
                          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                          </svg>
                        </span>
                      </div>
                      <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                      <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                  </div>
                </div>
                <div class="pt-6">
                  <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <div class="-mt-6">
                      <div>
                        <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                          <!-- Heroicon name: outline/cloud-upload -->
                          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                          </svg>
                        </span>
                      </div>
                      <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                      <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                  </div>
                </div>
  
             
               
              </div>
            </div>
          </div>
        </div>
  
        
  
        <!-- Blog section -->
        <div class="relative bg-gray-50 py-16 sm:py-24 lg:py-5">
            <div class="bg-black border-l-2 border-r-2 border-blue-500 flex justify-center">
                <img src="{{$page->baseUrl}}/assets/images/tokenomics.jpg" alt="">
            </div>
        </div>
  
        <!-- CTA Section -->
        
      </main>
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