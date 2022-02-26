@extends('_layouts.main')

@section('body')
<main class="py-5">
   

    <!-- Filters -->
    <section aria-labelledby="filter-heading">
      <h2 id="filter-heading" class="sr-only">Filters</h2>

      <div class="relative z-10 bg-gray-800 border-b border-gray-200 pb-4">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-between sm:px-6 lg:px-8">
          <div class="relative inline-block text-left">
           

            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
         
          </div>

          <!-- Mobile filter dialog toggle, controls the 'mobileFiltersOpen' state. -->
          {{-- <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button> --}}
          <div class="-mx-4 flex items-center lg:hidden divide-x divide-gray-200">
                

            <div class="px-4 relative inline-block text-left">
             <div class="flex flex-col items-center">
                <img src="{{$page->baseUrl}}/assets/images/carrot.png" class="flex-shrink-0 w-10" alt="">
                <span class="uppercase text-white font-semibold">Nourish(00:00:00)</span>
             </div>

              <!--
                'Color' dropdown, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              
            </div>

            <div class="px-4 relative inline-block text-left">
              <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                <span>Sizes</span>
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>

              <!--
                'Sizes' dropdown, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
             
            </div>
          </div>
          <div class="hidden sm:block">
            <div class="flow-root">
              <div class="-mx-4 flex items-center divide-x divide-gray-200">
                

                <div class="px-4 relative inline-block text-left">
                 <div class="flex flex-col items-center">
                    <img src="{{$page->baseUrl}}/assets/images/carrot.png" class="flex-shrink-0 w-10" alt="">
                    <span class="uppercase text-white font-semibold">Nourish(00:00:00)</span>
                 </div>

                  <!--
                    'Color' dropdown, show/hide based on dropdown state.

                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                  
                </div>

                <div class="px-4 relative inline-block text-left">
                  <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                    <span>Sizes</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>

                  <!--
                    'Sizes' dropdown, show/hide based on dropdown state.

                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Active filters -->
      <div class="bg-gray-700">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:flex sm:items-center sm:px-6 lg:px-8">
          <h3 class="text-lg font-bold uppercase tracking-wide text-white">
            YOUR BUNNY
            <span class="sr-only">, active</span>
          </h3>

          <div aria-hidden="true" class="hidden w-px h-5 bg-gray-300 sm:block sm:ml-4"></div>
          
          <div class="mt-2 sm:mt-0 sm:ml-4">
           <span class="text-white font-bold">0</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Product grid -->
    <section aria-labelledby="products-heading" class="max-w-2xl mx-auto pt-12 pb-16 px-4 sm:pt-16 sm:pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 id="products-heading" class="sr-only">Products</h2>

      <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://static.wikia.nocookie.net/sunny-bunnies/images/b/b6/Turbo.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
          </div>
        
        </a>
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://static.wikia.nocookie.net/sunny-bunnies/images/5/5d/Hoper_Pose_00.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
          </div>
        
        </a>
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://static.wikia.nocookie.net/sunny-bunnies/images/6/6b/Big_Boo.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
          </div>
        
        </a>
        <a href="#" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://static.wikia.nocookie.net/sunny-bunnies/images/a/ad/Iris_Pose_01.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
          </div>
        
        </a>

        

        <!-- More products... -->
      </div>
    </section>
  </main>
@endsection