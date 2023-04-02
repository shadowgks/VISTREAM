<!-- menu builder -->
<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-color-primary-75 shadow-sm">
    <div class="h-full overflow-y-auto scrollbars">
        <!--logo-->
        <div class="mh-18 text-center py-5">
            <a href="#" class="flex items-center justify-center">
                <img src="{{ asset('build/assets/images/logo/VISTREAM.png') }}" class="h-12 mr-3 sm:h-14" alt="VISTREAM" />
            </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{selected:null}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
            <li>
                <a  href="#" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('dashboard-active')" :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                        <path
                            d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-window-sidebar" viewBox="0 0 16 16">
                        <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
                    <span>Home</span>
                </a>
            </li>

            <li class="relative">
                <a  href="{{ route('user.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('user-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Users</span>
                </a>
            </li>

            <li>
                <a href="{{ route('media.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('media-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
                        <path
                            d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-window-maximize"></i> -->
                    <span>Media</span>
                </a>
            </li>

            <!-- dropdown -->
            <li class="relative" x-data="{selected:null}">
                <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 2 }" @click="selected !== 2 ? selected = 2 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-list-nested" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-stream"></i> -->
                    <span>Series</span>
                    <!-- caret -->
                    <span class="inline-block ltr:float-right rtl:float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }" width=".8rem" height=".8rem"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 10, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 10) }"></i> -->
                    </span>
                </a>
                <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                    class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">
                    <li class="relative">
                        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" @yield('episodes-active')>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-bar-chart-line" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                            </svg>
                            <!-- <i class="mr-2 fas fa-chart-bar"></i> -->
                            <span>Episodes</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="relative">
                <a href="{{ route('actor.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('actor-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-bar-chart-line" viewBox="0 0 16 16">
                        <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-chart-bar"></i> -->
                    <span>Actors</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('country.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('country-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Countries</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('type.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('type-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Types</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('genre.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('genre-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Genres</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('quality.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('quality-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Quality</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('slider.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('slider-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-folder" viewBox="0 0 16 16">
                        <path
                            d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg>
                    <!-- <i class="mr-2 fas fa-folder"></i> -->
                    <span>Sliders</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
