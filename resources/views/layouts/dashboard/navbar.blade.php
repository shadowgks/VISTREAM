<!-- Navbar -->
<nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }"
                class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 px-6 bg-white dark:bg-color-primary-75 shadow-sm transition-all duration-500 ease-in-out"
                id="desktop-menu">
                <!-- sidenav button-->
                <button id="navbartoggle" type="button"
                    class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-none focus:ring-0"
                    aria-controls="sidebar-menu" @click="open = !open" aria-expanded="false"
                    x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Mobile menu</span>
                    <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                        class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path class="hidden md:block" fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        <path class="md:hidden"
                            d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>

                    <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                        class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path class="md:hidden" fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        <path class="hidden md:block"
                            d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <!-- <i class="text-2xl fas fa-bars"></i> -->
                </button>

                <!-- Search -->
                <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>

                        {{-- <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm outline-none rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white hover:bg-white hover:text-black duration-500" placeholder="Search..."> --}}
                    </div>
                </form>


                <!-- menu -->
                <ul class="flex ltr:ml-auto rtl:mr-auto mt-2">
                    <!-- messages -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="#" class="py-3 px-4 flex text-sm rounded-full focus:outline-none"
                            id="messages" @click="open = ! open">
                            <div class="relative inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                    </path>
                                </svg>
                                <!-- <i class="text-2xl fas fa-envelope"></i> -->
                                <span
                                    class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span
                                        class="align-self-center">3</span></span>
                            </div>
                        </a>

                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transition-all duration-200 ease-out"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition-all duration-200 ease-in"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-color-primary-75 border dark:border-gray-700 shadow-md"
                            style="display: none;">
                            <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                                <div class="relative">
                                    <div class="font-bold">Messages</div>
                                    <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0">
                                        <a @click="open = ! open" href="javascript:;"
                                            class="inline-block ltr:mr-2 rtl:ml-2" title="Search message">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="inline-block w-4 h-4 bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                            <!-- <i class="fas fa-search"></i> -->
                                        </a>
                                        <div x-show="open" @click.away="open = false"
                                            class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white dark:bg-gray-700 z-10 rounded"
                                            style="min-width:16rem">
                                            <form class="inline-block w-full">
                                                <div class="flex flex-wrap items-stretch w-full relative">
                                                    <input type="text"
                                                        class="flex-shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        placeholder="Search messages…" aria-label="Search">
                                                    <div class="flex -mr-px">
                                                        <button
                                                            class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-color-secondary border border-color-secondary hover:text-white hover:ring-0 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                            type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="w-5 h-5">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg>
                                                            <!-- <i class="fas fa-search"></i> -->
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="Mark all as read">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="inline-block w-4 h-4 bi bi-envelope-open" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                                            </svg>
                                            <!-- <i class="fas fa-envelope-open"></i> -->
                                        </a>
                                        <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="inline-block w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                            <!-- <i class="fas fa-edit"></i> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="max-h-60 overflow-y-auto scrollbars show">
                                <a href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div class="relative">
                                                <img src="assets/img/avatar/avatar2.png"
                                                    class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                                                <span title="online"
                                                    class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Daniel Esteban</div>
                                            <div class="text-gray-500 text-sm mt-1">What do you think about this
                                                project?</div>
                                            <div class="text-gray-500 text-sm mt-1">12m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div class="relative">
                                                <img src="assets/img/avatar/avatar3.png"
                                                    class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                                                <span title="busy"
                                                    class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Carlos Garcia</div>
                                            <div class="text-gray-500 text-sm mt-1">Hello, how are you friends?</div>
                                            <div class="text-gray-500 text-sm mt-1">30m ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div class="relative">
                                                <img src="assets/img/avatar/avatar4.png"
                                                    class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                                                <span title="offline"
                                                    class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Steven Rey</div>
                                            <div class="text-gray-500 text-sm mt-1">Thank you for your help today.</div>
                                            <div class="text-gray-500 text-sm mt-1">4h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div class="relative">
                                                <img src="assets/img/avatar/avatar.png"
                                                    class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                                                <span title="offline"
                                                    class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Roman Davis</div>
                                            <div class="text-gray-500 text-sm mt-1">Do you have time? I want to call
                                                you.</div>
                                            <div class="text-gray-500 text-sm mt-1">5h ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-3 text-center font-normal">
                                <a href="#" class="hover:underline">Show all Messages</a>
                            </div>
                        </div>
                    </li>

                    <!-- notification -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none"
                            id="notify" @click="open = ! open">
                            <div class="relative inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                <!-- <i class="text-2xl fas fa-bell"></i> -->
                                <span
                                    class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span
                                        class="align-self-center">1</span></span>
                            </div>
                        </a>

                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transition-all duration-200 ease-out"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition-all duration-200 ease-in"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-color-primary-75 border dark:border-gray-700 shadow-md"
                            style="display: none;">
                            <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                                <div class="relative">
                                    <div class="font-bold">Notifications</div>
                                    <div class="absolute top-0 ltr:right-0 rtl:left-0">
                                        <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="Clear all">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="inline-block w-4 h-4 bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                            <!-- <i class="fas fa-trash-alt"></i> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="max-h-60 overflow-y-auto scrollbars show">
                                <a class="relative" href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div
                                                class="flex justify-center mx-auto w-8 h-8 rounded-full bg-color-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="self-center w-4 h-4 bi bi-calendar4-event"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                                    <path
                                                        d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                                </svg>
                                                <!-- <i class="self-center fas fa-calendar"></i> -->
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Event will coming</div>
                                            <div class="text-gray-500 text-sm mt-1">Meeting with Mr.John Navas
                                                at:10.00Am</div>
                                            <div class="text-gray-500 text-sm mt-1">1h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="relative" href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div
                                                class="flex justify-center mx-auto w-8 h-8 rounded-full bg-color-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="self-center w-4 h-4 bi bi-hand-thumbs-up"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                                </svg>
                                                <!-- <i class="self-center fas fa-thumbs-up"></i> -->
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-gray-500 text-sm mt-1"><b
                                                    class="text-gray-600 dark:text-gray-400">Daniel</b> like your post:
                                                <b class="text-gray-600 dark:text-gray-400">Hello World!</b>
                                            </div>
                                            <div class="text-gray-500 text-sm mt-1">3h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="relative" href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div
                                                class="flex justify-center mx-auto w-8 h-8 rounded-full bg-color-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="self-center w-4 h-4 bi bi-hdd-stack" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                                                    <path
                                                        d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                                    <path
                                                        d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                </svg>
                                                <!-- <i class="self-center fas fa-server"></i> -->
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-sm font-bold">Server maintenance</div>
                                            <div class="text-gray-500 text-sm mt-1">Server maintenance at:07.00Am</div>
                                            <div class="text-gray-500 text-sm mt-1">8h ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="relative" href="#">
                                    <div
                                        class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100">
                                        <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                                            <div
                                                class="flex justify-center mx-auto w-8 h-8 rounded-full bg-color-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="self-center w-4 h-4 bi bi-chat-left"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                </svg>
                                                <!-- <i class="self-center fas fa-comment"></i> -->
                                            </div>
                                        </div>
                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                            <div class="text-gray-500 text-sm mt-1"><b
                                                    class="text-gray-600 dark:text-gray-400">Carlos</b> comment in your
                                                post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                                            <div class="text-gray-500 text-sm mt-1">1d ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-3 text-center font-normal">
                                <a href="#" class="hover:underline">Show all Notifications</a>
                            </div>
                        </div>
                    </li>

                    <!-- profile -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none"
                            id="user-menu-button" @click="open = ! open">
                            <div class="relative">
                                <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700"
                                    src="assets/img/avatar/avatar.png" alt="avatar">
                                <span title="online"
                                    class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                            </div>
                            <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center">Ari Budin</span>
                        </a>
                        <ul x-show="open" @click.away="open = false"
                            x-transition:enter="transition-all duration-200 ease-out"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition-all duration-200 ease-in"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-color-primary-75 border dark:border-gray-700 shadow-md"
                            style="min-width:12rem;display: none;">
                            <li class="relative">
                                <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                                    <div class="flex-shrink max-w-full px-4 w-1/3">
                                        <img src="assets/img/avatar/avatar.png" class="h-10 w-10 rounded-full"
                                            alt="Ari Budin">
                                    </div>
                                    <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1">
                                        <div class="font-bold"><a href="#"
                                                class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari
                                                Budin</a></div>
                                        <div class="text-gray text-sm mt-1">Professional Front end developer.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                            </li>
                            <li class="relative">
                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                    </svg>
                                    <!-- <i class="mr-2 fas fa-cog"></i> --> Settings
                                </a>
                            </li>
                            <li class="relative">
                                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
                            </li>
                            <li class="relative">
                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill-rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                    <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
</nav>
<!-- End Navbar -->
