<nav class="bg-color-primary-75 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{ asset('build/assets/images/logo/VISTREAM.png') }}" class="h-12 mr-3 sm:h-14" alt="VISTREAM" />
        </a>

        <!-- search -->
        <div class="flex items-center md:order-2 md:gap-5">
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm outline-none rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white hover:bg-white hover:text-black duration-500" placeholder="Search...">
            </div>
            <!-- user -->
            <a href="">
                <i class="fa-solid fa-circle-user text-white text-2xl md:text-3xl"></i>
            </a>

            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden " aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Search...">
            </div>
            <ul class="flex flex-col p-4 mt-4 rounded-lg bg-color-primary-75 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-color-secondary hover:text-color-links rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-400 hover:text-color-links rounded md:bg-transparent md:p-0">Movies</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-400 rounded md:hover:bg-transparent hover:text-color-links md:p-0">TV-Series</a>
                </li>
                <li>
                    <button class="block py-2 pl-3 pr-4 text-gray-400 rounded md:hover:bg-transparent hover:text-color-links md:p-0" id="genre-menu-dropdown-button" data-dropdown-toggle="genre-menu-dropdown">Genre</button>
                    <div id="genre-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-color-primary-75 rounded-lg shadow-md  md:grid-cols-3">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Library
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Pro Version
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 ">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 text-gray-900">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <button class="block py-2 pl-3 pr-4 text-gray-400 rounded md:hover:bg-transparent hover:text-color-links md:p-0" id="country-menu-dropdown-button" data-dropdown-toggle="country-menu-dropdown">Country</button>
                    <div id="country-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-color-primary-75 rounded-lg shadow-md md:grid-cols-3">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Library
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Pro Version
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 ">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 text-gray-900">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-color-links">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-400 rounded md:hover:bg-transparent hover:text-color-links md:p-0">About
                        us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
