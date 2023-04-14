<nav class="bg-color-primary-75 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('home.index') }}" class="flex items-center">
            <img src="{{ asset('build/assets/images/logo/VISTREAM.png') }}" class="h-12 mr-3 sm:h-14" alt="VISTREAM" />
        </a>

        <!-- search -->
        <div class="relative flex items-center md:order-2 md:gap-5">
            <form action="" method="">
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>

                    <input type="text" data-url="{{ route('search.media') }}" class="search-navbar block w-full p-2 pl-10 text-sm outline-none rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white hover:bg-white hover:text-black duration-500"
                        placeholder="Search...">

                    @include('layouts.media.includes.components.results_search')
                </div>
            </form>

            <!-- user -->
            @if (Auth::user())
                {{-- icon watchlist --}}
                <div class="mx-2 md:m-0">
                    <a href="{{ route('media.watchlist') }}" class="relative">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path fill="#ffffff"
                                        d="M48,6c-4.418,0-8.418,1.791-11.313,4.687l-3.979,3.961c-0.391,0.391-1.023,0.391-1.414,0 c0,0-3.971-3.97-3.979-3.961C24.418,7.791,20.418,6,16,6C7.163,6,0,13.163,0,22c0,3.338,1.024,6.436,2.773,9 c0,0,0.734,1.164,1.602,2.031s24.797,24.797,24.797,24.797C29.953,58.609,30.977,59,32,59s2.047-0.391,2.828-1.172 c0,0,23.93-23.93,24.797-24.797S61.227,31,61.227,31C62.976,28.436,64,25.338,64,22C64,13.163,56.837,6,48,6z M58.714,30.977 c0,0-0.612,0.75-1.823,1.961S33.414,56.414,33.414,56.414C33.023,56.805,32.512,57,32,57s-1.023-0.195-1.414-0.586 c0,0-22.266-22.266-23.477-23.477s-1.823-1.961-1.823-1.961C3.245,28.545,2,25.424,2,22C2,14.268,8.268,8,16,8 c3.866,0,7.366,1.566,9.899,4.101l0.009-0.009l4.678,4.677c0.781,0.781,2.047,0.781,2.828,0l4.678-4.677l0.009,0.009 C40.634,9.566,44.134,8,48,8c7.732,0,14,6.268,14,14C62,25.424,60.755,28.545,58.714,30.977z">
                                    </path>
                                    <path fill="#ffffff" d="M48,12c-0.553,0-1,0.447-1,1s0.447,1,1,1c4.418,0,8,3.582,8,8c0,0.553,0.447,1,1,1s1-0.447,1-1 C58,16.478,53.522,12,48,12z"></path>
                                </g>
                            </g>
                        </svg>
                        <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-4 border-white rounded-full -top-2 -left-2 dark:border-gray-900">8</div>
                    </a>

                </div>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                @else
                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                @endif
                <div>
                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-color-primary-75 divide-y divide-gray-500 rounded-lg shadow w-44">
                        <div class="px-4 py-3 text-sm text-white">
                            <div class="uppercase">{{ Auth::user()->name }}</div>
                            <div class="font-medium truncate">Admin</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="{{ route('dashboard.index') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Dashboard </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">Settings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <form action="{{ route('logout') }}" class="flex" method="post">
                                @csrf
                                <button type="submit" class="block flex-1 text-start px-4 py-2 text-sm text-gray-100 hover:bg-gray-100 hover:text-black">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <i class="fa-solid fa-circle-user text-white text-2xl md:text-3xl"></i>
                </a>
            @endif


            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden " aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 block md:hidden">
                <form action="" method="">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>

                        <input type="text" data-url="{{ route('search.media') }}" class="search-navbar block w-full p-2 pl-10 text-sm outline-none rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white hover:bg-white hover:text-black duration-500"
                            placeholder="Search...">

                        @include('layouts.media.includes.components.results_search')
                    </div>
                </form>
            </div>
            <ul class="flex flex-col p-4 mt-4 rounded-lg bg-color-primary-75 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <a href="{{ route('home.index') }}" class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_home_active') bg-color-secondary hover:text-color-links rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('movies.index') }}" class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_movies_active') hover:text-color-links rounded md:bg-transparent md:p-0">Movies</a>
                </li>
                <li>
                    <a href="{{ route('series.index') }}" class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_series_active') rounded md:hover:bg-transparent hover:text-color-links md:p-0">TV-Series</a>
                </li>
                <li>
                    <button class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_genres_active') rounded md:hover:bg-transparent hover:text-color-links md:p-0" id="genre-menu-dropdown-button" data-dropdown-toggle="genre-menu-dropdown">Genres</button>
                    <div id="genre-menu-dropdown" class="absolute z-10 hidden w-auto text-sm bg-color-primary-75 rounded-lg shadow-md">
                        <div class="p-7 pb-0 grid text-gray-900 md:pb-4">
                            <ul aria-labelledby="mega-menu-dropdown-button">
                                <li class="grid items-center grid-cols-4 gap-4">
                                    @foreach ($global_data['genres'] as $item)
                                        <a href="{{ route('media.genre.show', $item->name) }}" class="text-gray-400  hover:text-color-links">
                                            {{ $item->name }}
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <button class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_countries_active') rounded md:hover:bg-transparent hover:text-color-links md:p-0" id="country-menu-dropdown-button" data-dropdown-toggle="country-menu-dropdown">Countries</button>
                    <div id="country-menu-dropdown" class="absolute z-10 hidden w-auto text-sm bg-color-primary-75 rounded-lg shadow-md">
                        <div class="p-7 pb-0 grid items-center text-gray-900 md:pb-4">
                            <ul aria-labelledby="mega-menu-dropdown-button">
                                <li class="grid items-center grid-cols-4 gap-4">
                                    @foreach ($global_data['countries'] as $item)
                                        <a href="{{ route('media.country.show', $item->name) }}" class="text-gray-400  hover:text-color-links">
                                            {{ $item->name }}
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('actors.index') }}" class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_actors_active') rounded md:hover:bg-transparent hover:text-color-links md:p-0">Actors</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-400 @yield('link_about_active') rounded md:hover:bg-transparent hover:text-color-links md:p-0">About us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
