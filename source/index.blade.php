@extends('_layouts.main')

@section('body')
    <main x-data="app">
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
                                win races to earn tokens!</p>
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

                                <div class="mt-5 flex justify-center">
                                    <button id="connectButton" @click="MetaMaskClientCheck()" class="p-2 bg-white flex space-x-2 rounded-md"><span>Sign-In
                                            with</span>
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404 420.2"
                                            width="25" height="25">
                                            <style>
                                                .st0 {
                                                    fill: #e4761b;
                                                    stroke: #e4761b
                                                }

                                                .st1 {
                                                    fill: #f6851b;
                                                    stroke: #f6851b
                                                }

                                                .st2 {
                                                    fill: #763d16;
                                                    stroke: #763d16
                                                }

                                                .st3 {
                                                    fill: #e2761b;
                                                    stroke: #e2761b
                                                }

                                                .st4 {
                                                    fill: #c0ad9e;
                                                    stroke: #c0ad9e
                                                }

                                                .st5 {
                                                    fill: #cd6116;
                                                    stroke: #cd6116
                                                }

                                                .st6 {
                                                    fill: #e4751f;
                                                    stroke: #e4751f
                                                }

                                                .st7 {
                                                    fill: #233447;
                                                    stroke: #233447
                                                }

                                                .st8 {
                                                    fill: #d7c1b3;
                                                    stroke: #d7c1b3
                                                }

                                                .st9 {
                                                    fill: #161616;
                                                    stroke: #161616
                                                }

                                            </style>
                                            <path class="st0" d="M382.9 290.9l-24.4 82.5-47.9-13.1z" />
                                            <path class="st0" d="M310.6 360.3l46.2-63.3 26.1-6.1z" />
                                            <path class="st1"
                                                d="M347 228.7l35.9 62.2-26.1 6.1zM347 228.7l23.1-16 12.8 78.2z" />
                                            <path class="st2"
                                                d="M317.6 181.7l66.4-27.2-3.3 14.9zM378.6 187.3l-61-5.6 63.1-12.3z" />
                                            <path class="st2"
                                                d="M378.6 187.3l-8.5 25.4-52.5-31zM391.9 160.8l-11.2 8.6 3.3-14.9zM378.6 187.3l2.1-17.9 8.9 7.4z" />
                                            <path class="st3" d="M259.1 340.2l16.6 5.3 34.9 14.8z" />
                                            <path class="st2"
                                                d="M370.1 212.7l8.5-25.4 7.3 5.6zM370.1 212.7L301.2 190l16.4-8.3z" />
                                            <path class="st2" d="M334 103.8l-16.4 77.9-16.4 8.3z" />
                                            <path class="st2" d="M384 154.5l-66.4 27.2 16.4-77.9z" />
                                            <path class="st2" d="M334 103.8l69.3-8-19.3 58.7z" />
                                            <path class="st1" d="M370.1 212.7l-23.1 16-45.8-38.7z" />
                                            <path class="st2" d="M400.3 39.7l3 56.1-69.3 8z" />
                                            <path class="st3" d="M400.3 39.7L261.8 140.4 260 72.1z" />
                                            <path class="st1" d="M157 63.9l103 8.2 1.8 68.3z" />
                                            <path class="st2" d="M301.2 190l-39.4-49.6 72.2-36.6z" />
                                            <path class="st0" d="M301.2 190l45.8 38.7-64.3 7.1z" />
                                            <path class="st0" d="M282.7 235.8l-20.9-95.4 39.4 49.6z" />
                                            <path class="st2" d="M334 103.8l-72.2 36.6L400.3 39.7z" />
                                            <path class="st4" d="M157.9 358.7l32.7 34.1-44.5-40.5z" />
                                            <path class="st5" d="M310.6 360.3l15.5-58.9 30.7-4.4z" />
                                            <path class="st3" d="M25.3 194.6l56.6-59.5-49.3 52.4z" />
                                            <path class="st1"
                                                d="M356.8 297l-30.7 4.4 20.9-72.7zM261.8 140.4l-55.1-1.8L157 63.9z" />
                                            <path class="st6" d="M347 228.7l-20.9 72.7-1.7-35.5z" />
                                            <path class="st5" d="M282.7 235.8l64.3-7.1-22.6 37.2z" />
                                            <path class="st1" d="M206.7 138.6l55.1 1.8 20.9 95.4z" />
                                            <path class="st0"
                                                d="M206.7 138.6L58 1l99 62.9zM156.9 379.6l-129.2 40-25.8-98.5z" />
                                            <path class="st2" d="M44.5 219.2l48.8-38.3 40.9 9.5z" />
                                            <path class="st2" d="M134.2 190.4l-40.9-9.5 21.9-90.4z" />
                                            <path class="st2" d="M32.6 187.5l60.7-6.6-48.8 38.3z" />
                                            <path class="st5" d="M324.4 265.9l-25.2-12.7-16.5-17.4z" />
                                            <path class="st2" d="M32.6 187.5l-4.3-22.7 65 16.1z" />
                                            <path class="st7" d="M294 281.8l5.2-28.6 25.2 12.7z" />
                                            <path class="st1" d="M326.1 301.4L294 281.8l30.4-15.9z" />
                                            <path class="st2"
                                                d="M93.3 180.9l-65-16.1-5.3-19.1zM115.2 90.5l-21.9 90.4L23 145.7zM115.2 90.5l91.5 48.1-72.5 51.8z" />
                                            <path class="st0"
                                                d="M134.2 190.4l72.5-51.8 32.3 98.7zM239 237.3l-100.2-2.1-4.6-44.8z" />
                                            <path class="st1"
                                                d="M44.5 219.2l89.7-28.8 4.6 44.8zM282.7 235.8l-43.7 1.5-32.3-98.7z" />
                                            <path class="st5" d="M299.2 253.2l-5.2 28.6-11.3-46z" />
                                            <path class="st2" d="M58 1l148.7 137.6-91.5-48.1z" />
                                            <path class="st0" d="M1.9 321.1l125.4-5.2 29.6 63.7z" />
                                            <path class="st5" d="M156.9 379.6l-29.6-63.7 61.6-3z" />
                                            <path class="st1"
                                                d="M294 281.8l32.1 19.6 17.7 41.7zM138.8 235.2L1.9 321.1l42.6-101.9zM127.3 315.9L1.9 321.1l136.9-85.9zM282.7 235.8l8.2 29.8-39.6 2.3zM251.3 267.9L239 237.3l43.7-1.5z" />
                                            <path class="st4" d="M190.6 392.8l-33.7-13.2 117.2 19.7z" />
                                            <path class="st2" d="M44.5 219.2l-19.2-24.6 7.3-7.1z" />
                                            <path class="st8" d="M287.4 384.7l-13.3 14.6-117.2-19.7z" />
                                            <path class="st0" d="M293.7 348.9l-136.8 30.7 32-66.7z" />
                                            <path class="st8" d="M156.9 379.6l136.8-30.7-6.3 35.8z" />
                                            <path class="st2"
                                                d="M23 145.7l-4.5-76.9 96.7 21.7zM32.6 187.5L19.3 174l9-9.2z" />
                                            <path class="st5" d="M216.6 257.1l22.4-19.8-3.2 48.4z" />
                                            <path class="st5" d="M239 237.3l-22.4 19.8L184 274z" />
                                            <path class="st1" d="M343.8 343.1l-6.1-4.5-43.7-56.8z" />
                                            <path class="st5" d="M184 274l-45.2-38.8 100.2 2.1z" />
                                            <path class="st6" d="M235.8 285.7l3.2-48.4 12.3 30.6z" />
                                            <path class="st2" d="M14.9 153.3l8.1-7.6 5.3 19.1z" />
                                            <path class="st7" d="M235.8 285.7L184 274l32.6-16.9z" />
                                            <path class="st2" d="M115.2 90.5L18.5 68.8 58 1z" />
                                            <path class="st4" d="M274.1 399.3l5.5 15-89-21.5z" />
                                            <path class="st1" d="M188.9 312.9L184 274l51.8 11.7z" />
                                            <path class="st6" d="M138.8 235.2L184 274l4.9 38.9z" />
                                            <path class="st1"
                                                d="M251.3 267.9l39.6-2.3 46.8 73zM138.8 235.2l50.1 77.7-61.6 3z" />
                                            <path class="st6" d="M251.3 267.9l49.2 74.9-64.7-57.1z" />
                                            <path class="st1" d="M235.8 285.7l64.7 57.1-6.8 6.1z" />
                                            <path class="st1"
                                                d="M293.7 348.9l-104.8-36 46.9-27.2zM337.7 338.6l-37.2 4.2-49.2-74.9z" />
                                            <path class="st4"
                                                d="M347.5 373.8l-16 32.1-51.9 8.4zM279.6 414.3l-5.5-15 13.3-14.6z" />
                                            <path class="st4"
                                                d="M287.4 384.7l9.8-3.9-17.6 33.5zM279.6 414.3l17.6-33.5 50.3-7z" />
                                            <path class="st9" d="M337.7 338.6l12.3 7.5-37.4 4.5z" />
                                            <path class="st9"
                                                d="M312.6 350.6l-12.1-7.8 37.2-4.2zM308.3 356.5l45.5-5.5-6.3 22.8z" />
                                            <path class="st9"
                                                d="M347.5 373.8l-50.3 7 11.1-24.3zM297.2 380.8l-9.8 3.9 6.3-35.8zM293.7 348.9l6.8-6.1 12.1 7.8zM350 346.1l3.8 4.9-45.5 5.5z" />
                                            <path class="st9"
                                                d="M308.3 356.5l4.3-5.9 37.4-4.5zM293.7 348.9l14.6 7.6-11.1 24.3z" />
                                            <path class="st9" d="M312.6 350.6l-4.3 5.9-14.6-7.6z" />
                                        </svg> </button>

                                </div>
                            </div>

                            <div class="mt-20 flex items-center flex-col">
                                <h1 class="underline text-white text-4xl font-bold">936 CRB Sold! 2036 left to mint!</h1>
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
                                src="{{ $page->baseUrl }}/assets/images/cryptobunny.jpg" alt="">
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
                    <p class="text-justify lg:text-xl font-semibold text-white">Inspired by the famous arcade game, Sonic
                        and Friends, the story was centered on the five (5)
                        passionate villagers from different kingdoms who aims to get the highest price that is found on the
                        center of Czen Castle, which is their final lap in getting all the Carrot Box in order to sustain
                        for their kingdoms who is under crisis. Due to food starvation, Nathalia- a villager from the
                        Southern Village, Quinne- a villager from the Northern Village, Ivanna- a villager from the Western
                        Village, Luna- a villager from the Eastern Village and Ruth- a villager from the Northeastern
                        Village, who all loves their community and will do what it takes to provide what their community
                        needs, resulting them to join the race for the carrot box. During the race, there is only one rule:
                        the faster they run, the more carrots they will get.</p>

                    <p class="lg:mt-20 mt-20 text-lg text-white text-justify">
                        The final location of the race is in the Czen Castle, wherein all the prizes awaits! And one of
                        those prizes is found inside the Carrot Box, which contains the following prizes:
                    </p>

                    <div
                        class="mt-5 flex flex-col border-blue-500 border-r border-l border-b shadow-lg p-2 rounded-md  space-y-4">
                        <div class="flex space-x-1">
                            <img src="{{ $page->baseUrl }}/assets/images/trophy.png" class="h-6" alt="">
                            <h1 class="text-white text-justify">First Placer- Carrot Box worth 3000 carrots</h1>
                        </div>
                        <div class="flex space-x-1">
                            <img src="{{ $page->baseUrl }}/assets/images/trophy.png" class="h-6" alt="">
                            <h1 class="text-white text-justify">Second Placer- Carrot Box worth 2400 carrots</h1>
                        </div>
                        <div class="flex space-x-1">
                            <img src="{{ $page->baseUrl }}/assets/images/trophy.png" class="h-6" alt="">
                            <h1 class="text-white text-justify">Third Placer- Carrot Box worth 1500 carrots</h1>
                        </div>
                        <div class="flex space-x-1">
                            <img src="{{ $page->baseUrl }}/assets/images/trophy.png" class="h-6" alt="">
                            <h1 class="text-white text-justify">Fourth and Fifth Placer- Carrot Box worth 1000 carrots</h1>
                        </div>
                    </div>

                    <p class="mt-5 text-lg text-white text-justify">
                        In order to solve the crisis encountered in their individual villages, these villagers are confident
                        enough to strive and aim for greatness in getting the prize.
                    </p>
                </div>
            </div>
        </div>

        <!-- Feature section with grid -->
        <div class="relative bg-gray-700 py-16 sm:py-24 lg:py-6">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <h2 class=" text-4xl font-bold tracking-wider text-white uppercase">characters</h2>
                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <a href="#" class="group">
                            <div
                                class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r hover:scale-50 from-blue-500 h-72 to-green-400 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ $page->baseUrl }}/assets/images/002.png"
                                    alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                    class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="mt-1 text-white">
                                <div class="flex items-center space-x-1">
                                    <img src="{{ $page->baseUrl }}/assets/images/rabbit.png" class=" h-5"
                                        alt="">
                                    <h1 class="text-lg font-bold">Ivanna</h1>
                                </div>
                                <span class="text-sm">A villager from the Western Village, a family-oriented person
                                    that is willing to do for her family and to the community in general.</span>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div
                                class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 h-72 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ $page->baseUrl }}/assets/images/003.png"
                                    alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                    class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>

                            <div class="mt-1 text-white">

                                <div class="flex items-center space-x-1">
                                    <img src="{{ $page->baseUrl }}/assets/images/rabbit.png" class=" h-5"
                                        alt="">
                                    <h1 class="text-lg font-bold">Natalia</h1>
                                </div>
                                <span class="text-sm">A villager from the Southern Village, a kindhearted person who
                                    loves helping her community.</span>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div
                                class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 h-72 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ $page->baseUrl }}/assets/images/000.png"
                                    alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                    class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="mt-1 text-white">

                                <div class="flex items-center space-x-1">
                                    <img src="{{ $page->baseUrl }}/assets/images/rabbit.png" class=" h-5"
                                        alt="">
                                    <h1 class="text-lg font-bold">Ruth</h1>
                                </div>
                                <span class="text-sm">A villager from the Northeastern Village, a weird yet generous
                                    person who is willing to win for herself and to the village.</span>
                            </div>
                        </a>

                        <a href="#" class="group">
                            <div
                                class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 h-72 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ $page->baseUrl }}/assets/images/001.png"
                                    alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                    class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="mt-1 text-white">

                                <div class="flex items-center space-x-1">
                                    <img src="{{ $page->baseUrl }}/assets/images/rabbit.png" class=" h-5"
                                        alt="">
                                    <h1 class="text-lg font-bold">Luna</h1>
                                </div>
                                <span class="text-sm">A villager from the Eastern Village, a jolly-go-round person
                                    that is always able to represent herself from the village she came in.</span>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div
                                class="w-full aspect-w-1 aspect-h-1 bg-gradient-to-r from-blue-500 to-green-400 h-72 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="{{ $page->baseUrl }}/assets/images/004.png"
                                    alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                    class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="mt-1 text-white">

                                <div class="flex items-center space-x-1">
                                    <img src="{{ $page->baseUrl }}/assets/images/rabbit.png" class=" h-5"
                                        alt="">
                                    <h1 class="text-lg font-bold">Quinne</h1>
                                </div>
                                <span class="text-sm">A villager from the Northern Village, a caring person who
                                    wants to make her village known and famous than other villages.</span>
                            </div>
                        </a>



                        <!-- More products... -->
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
@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('app', () => ({
                forwardOrigin: '',
                init() {
                    this.forwardOrigin = 'https://locahost:3000';
                   
                },
                //methods
                async isMetaMaskInstalled() {
                    const {
                        ethereum
                    } = window;
                    return Boolean(ethereum && ethereum.isMetaMask);
                },

                onClickInstall() {
                    onboarding.startOnboarding();
                },

                async onClickConnect() {
                    try {
                        // Will open the MetaMask UI
                        // You should disable this button while the request is pending!
                        await ethereum.request({
                            method: 'eth_requestAccounts'
                        });
                    } catch (error) {
                        console.error(error);
                    }
                },

                MetaMaskClientCheck() {
                    if (!this.isMetaMaskInstalled()) {
                       this.onClickInstall();
                    } else {
                      this.onClickConnect();
                    }
                }

            }))
        })
    </script>
@endsection
