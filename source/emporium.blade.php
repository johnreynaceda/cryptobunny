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
                <div class="flex flex-col items-center">
                    <img src="{{$page->baseUrl}}/assets/images/pet-cage.png" class="flex-shrink-0 w-10" alt="">
                    <span class="uppercase text-white font-semibold">BUY NEW BOX</span>
                 </div>

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
                    <span class="uppercase text-white font-semibold">Vittles(00:00:00)</span>
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
                    <div class="flex flex-col items-center">
                        <img src="{{$page->baseUrl}}/assets/images/pet-cage.png" class="flex-shrink-0 w-10" alt="">
                        <span class="uppercase text-white font-semibold">Fluffle rising</span>
                     </div>
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
    <section aria-labelledby="products-heading" class=" mx-auto pt-0 ">
        <div class="flex justify-center">
          <img src="{{$page->baseUrl}}/assets/images/emporiumbg.jpg" alt="">
        </div>
    </section>
  </main>
@endsection