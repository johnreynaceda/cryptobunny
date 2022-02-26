@extends('_layouts.main')

@section('body')
    <main>
        <div class="pt-10 bg-gray-700 sm:pt-16 lg:pt-0 lg:pb-0 lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">

                            <h1
                                class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-5xl">
                                <div class="flex items-end border-b">
                                    <h1>CRYPTO</h1>
                                    <h1
                                        class="text-2xl italic mr-5 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-400">
                                        Bunny</h1>
                                    <h1 class="text-4xl"> Games</h1>
                                </div>

                            </h1>
                            <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-lg">Build your crypto bunny and
                                win battles to earn tokens!</p>
                            <div class="mt-20">
                                <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                    <a href="https://www.facebook.com/groups/382558233200998/?ref=share" target="_blank"
                                        class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-blue-600 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather bg-white rounded-full p-0.5 text-blue-500 feather-facebook">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>
                                        <span>Facebook</span>
                                    </a>
                                    <a href="http://twitter.com/czenguildgames" target="_blank"
                                        class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-blue-400 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather  fill-current p-0.5 feather-twitter">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>
                                        <span>Twitter</span>
                                    </a>
                                    <a href="https://discord.gg/3gRbBCgF" target="_blank"
                                        class="col-span-1 space-x-2 flex justify-center shadow-sm rounded-md text-white bg-gray-800 p-2">
                                        <svg width="25px" height="25px" viewBox="0 -28.5 256 256" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            preserveAspectRatio="xMidYMid">
                                            <g>
                                                <path
                                                    d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z"
                                                    fill="#ffff" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <span>Discord</span>
                                    </a>


                                </ul>
                            </div>

                            <div class="mt-10 flex items-center flex-col">
                                <h1 class="underline text-white text-4xl font-bold">The Game is live!</h1>
                                <h1 class="text-white text-lg font-semibold mt-5">$CRB Token Address:</h1>
                                <a href="#"
                                    class="text-white underline text-md ">0x158b972Ed36554AD09ee1c61250FfD318bB71Fcb</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img class="w-full hidden lg:block lg:absolute border-l-2 border-blue-500 lg:inset-y-0 rounded-l-3xl lg:left-0 lg:h-full lg:w-auto shadow-4xl lg:max-w-none"
                                src="https://images-na.ssl-images-amazon.com/images/I/71AWssVEjBL._RI_.jpg" alt="">
                            <img class="w-full lg:hidden lg:absolute border-l-2 border-r-2 border-blue-500 lg:inset-y-0 rounded-l-3xl rounded-r-3xl lg:left-0 lg:h-full lg:w-auto shadow-4xl lg:max-w-none"
                                src="https://images-na.ssl-images-amazon.com/images/I/71AWssVEjBL._RI_.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature section with screenshot -->
        <div class="relative bg-gray-800 border-t-2 border-b-2 pt-16 sm:pt-10 lg:pt-0">
            <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
                {{-- <div class="bg-black border-l-2 border-r-2 border-blue-500 flex justify-center">
            <img src="{{$page->baseUrl}}/assets/images/road_map.jpg" alt="">
        </div> --}}
                <div class=" p-5 flex flex-col">
                    <p class="text-justify lg:text-xl font-semibold text-white">Inspired by the famous arcade game, Sonic and Friends, the story was centered on the five (5)
                        passionate villagers from different kingdoms who aims to get the highest price that is found on the
                        center of Czen Castle, which is their final lap in getting all the Carrot Box in order to sustain
                        for their kingdoms who is under crisis. Due to food starvation, Nathalia- a villager from the
                        Southern Village, Quinne- a villager from the Northern Village, Ivanna- a villager from the Western
                        Village, Luna- a villager from the Eastern Village and Ruth- a villager from the Northeastern
                        Village, who all loves their community and will do what it takes to provide what their community
                        needs, resulting them to join the race for the carrot box. During the race, there is only one rule:
                        the faster they run, the more carrots they will get.</p>

                        <p class="lg:mt-32 mt-20 text-lg text-white text-justify">
                            The final location of the race is in the Czen Castle, wherein all the prizes awaits! And one of those prizes is found inside the Carrot Box, which contains the following prizes:
                        </p>

                        <div class="mt-5 flex flex-col border-blue-500 border-r border-l border-b shadow-lg p-2 rounded-md  space-y-4">
                            <div class="flex space-x-1">
                                <img src="{{$page->baseUrl}}/assets/images/trophy.png" class="h-6" alt="">
                                <h1 class="text-white text-justify">First Placer- Carrot Box worth 3000 carrots</h1>
                            </div>
                            <div class="flex space-x-1">
                                <img src="{{$page->baseUrl}}/assets/images/trophy.png" class="h-6" alt="">
                                <h1 class="text-white text-justify">Second Placer- Carrot Box worth 2400 carrots</h1>
                            </div>
                            <div class="flex space-x-1">
                                <img src="{{$page->baseUrl}}/assets/images/trophy.png" class="h-6" alt="">
                                <h1 class="text-white text-justify">Third Placer- Carrot Box worth 1500 carrots</h1>
                            </div>
                            <div class="flex space-x-1">
                                <img src="{{$page->baseUrl}}/assets/images/trophy.png" class="h-6" alt="">
                                <h1 class="text-white text-justify">Fourth and Fifth Placer- Carrot Box worth 1000 carrots</h1>
                            </div>
                        </div>

                        <p class="mt-5 text-lg text-white text-justify">
                            In order to solve the crisis encountered in their individual villages, these villagers are confident enough to strive and aim for greatness in getting the prize.
                        </p>
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
                                        <span
                                            class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                                            <!-- Heroicon name: outline/cloud-upload -->
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                                    <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                                            <!-- Heroicon name: outline/cloud-upload -->
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                                    <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                                            <!-- Heroicon name: outline/cloud-upload -->
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                                    <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span
                                            class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-blue-500 to-green-600 rounded-md shadow-lg">
                                            <!-- Heroicon name: outline/cloud-upload -->
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem Ipsum</h3>
                                    <p class="mt-5 text-base text-gray-500">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s,</p>
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
                <img src="{{ $page->baseUrl }}/assets/images/tokenomics.jpg" alt="">
            </div>
        </div>

        <!-- CTA Section -->

    </main>
@endsection
