<!-- Navbar -->
<nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }"
    class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 px-6 bg-white dark:bg-color-primary-75 shadow-sm transition-all duration-500 ease-in-out" id="desktop-menu">
    <!-- sidenav button-->
    <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-none focus:ring-0" aria-controls="sidebar-menu" @click="open = !open" aria-expanded="false"
        x-bind:aria-expanded="open.toString()">
        <span class="sr-only">Mobile menu</span>
        <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="hidden md:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            <path class="md:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>

        <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>
        <!-- <i class="text-2xl fas fa-bars"></i> -->
    </button>

    <!-- Search -->
    <form action="" method="">
        <div class="relative hidden md:block ml-5">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Search icon</span>
            </div>

            <input type="text" data-url="{{ route('search.media') }}" id="search-navbar" class="block w-full p-2 pl-10 text-sm outline-none rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white hover:bg-white hover:text-black duration-500"
                placeholder="Search...">

            <div id="search-results" class="text-white">
                <!-- bg media search -->
            </div>
        </div>
    </form>


    <!-- menu -->
    <ul class="flex ltr:ml-auto rtl:mr-auto mt-2">
        <!-- profile -->
        <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
                <div class="relative">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="h-10 w-10 object-cover rounded-full border border-gray-700 bg-gray-700" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    @else
                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    @endif
                    <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                </div>
                <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center uppercase">{{ Auth::user()->name }}</span>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
                class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-color-primary-75 border dark:border-gray-700 shadow-md" style="min-width:12rem;display: none;">
                <li class="relative">
                    <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 justify-center">
                        <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                            <div class="font-bold"><a href="#" class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500 uppercase">{{ Auth::user()->name }}</a></div>
                            <div class="text-gray text-sm mt-1">Admin</div>
                        </div>
                    </div>
                </li>
                <li class="relative">
                    <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                </li>
                <li class="relative">
                    <a href="{{ route('profile.show') }}" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                        Settings
                    </a>
                </li>
                <li class="relative">
                    <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                </li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                <li class="relative">
                    <button type="submit" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 text-start" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                        Sign out
                    </button>
                </li>
                </form>
            </ul>
        </li>
    </ul>
</nav>
<!-- End Navbar -->
