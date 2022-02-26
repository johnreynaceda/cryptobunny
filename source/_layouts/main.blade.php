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
