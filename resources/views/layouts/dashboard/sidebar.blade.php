<!-- menu builder -->
<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed w-64 transition-all duration-500 ease-in-out h-screen bg-white dark:bg-color-primary-75 shadow-sm">
    <div class="h-full overflow-y-auto scrollbars">
        <!--logo-->
        <div class="mh-18 text-center py-5">
            <a href="{{ route('home.index') }}" class="flex items-center justify-center">
                <img src="{{ asset('build/assets/images/logo/VISTREAM.png') }}" class="h-12 mr-3 sm:h-14" alt="VISTREAM" />
            </a>
        </div>

        <!-- Sidebar menu -->
        <ul id="side-menu" x-data="{ selected: null }" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
            <li>
                <a href="{{ route('dashboard.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('dashboard-active')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
                        <path
                            d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('media.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('media-active')">
                    <svg fill="currentColor" width="16" height="16" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#9ca3af">
                        <path
                            d="M1813.333 1557.195c-557.76 126.826-1148.48 126.826-1706.666 0V468.448c557.76-126.827 1148.48-126.933 1706.666 0v1088.747ZM1879.04 374.26c-600.32-143.573-1238.4-143.466-1838.08 0L0 384.075v1257.493l40.96 9.813c300.053 71.787 609.28 108.054 919.04 108.054 309.867 0 619.2-36.267 919.04-108.054l40.96-9.813V384.075l-40.96-9.814ZM853.333 786.987l376.32 225.813-376.32 225.813V786.987Zm-106.666 640 690.346-414.187-690.346-414.187v828.374Z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span>Media</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('serie.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('serie-active')">
                    <svg fill="currentColor" width="16px" height="16px" class="inline-block h-4 w-4 mr-2 bi bi-columns-gap" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="107.52000000000001"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M1142.277 1243.138H777.214v347.178c66.118 23.143 113.538 86.085 113.538 160.103 0 93.657-75.924 169.581-169.581 169.581-93.657 0-169.581-75.924-169.581-169.581 0-74.018 47.42-136.96 113.538-160.103v-347.178H541.656l.033 198.107c0 77.095-62.497 139.592-139.592 139.592l-59.136-.048c-22.914 66.534-86.064 114.337-160.38 114.337C88.924 1695.126 13 1619.2 13 1525.544s75.924-169.581 169.581-169.581c73.707 0 136.431 47.023 159.809 112.707h61.463c14.201 0 25.714-11.513 25.714-25.714v-199.818H183.115c-32.461 0-58.776-26.314-58.776-58.775V58.776C124.339 26.315 150.654 0 183.115 0h1552.02c32.46 0 58.775 26.315 58.775 58.776v1125.587c0 32.46-26.314 58.775-58.775 58.775h-245.278v199.818c0 14.201 11.512 25.714 25.714 25.714h61.463c23.377-65.684 86.101-112.707 159.808-112.707 93.658 0 169.582 75.924 169.582 169.581 0 93.657-75.924 169.582-169.582 169.582-74.315 0-137.465-47.803-160.379-114.337l-59.1.048c-77.131 0-139.628-62.497-139.628-139.592l.033-198.107h-123.405v347.178c66.118 23.143 113.538 86.085 113.538 160.103 0 93.657-75.924 169.581-169.581 169.581-93.657 0-169.581-75.924-169.581-169.581 0-74.018 47.42-136.96 113.538-160.103v-347.178Zm57.394 562.91c30.723 0 55.629-24.906 55.629-55.63 0-30.722-24.906-55.628-55.629-55.628s-55.629 24.906-55.629 55.629 24.906 55.629 55.63 55.629Zm-477.149 0c30.723 0 55.629-24.906 55.629-55.63 0-30.722-24.906-55.628-55.629-55.628s-55.629 24.906-55.629 55.629 24.906 55.629 55.629 55.629Zm1015.672-224.875c30.723 0 55.628-24.906 55.628-55.629s-24.905-55.629-55.628-55.629-55.63 24.906-55.63 55.63c0 30.722 24.907 55.628 55.63 55.628Zm-1556.964 0c30.723 0 55.63-24.906 55.63-55.629s-24.907-55.629-55.63-55.629c-30.723 0-55.629 24.906-55.629 55.63 0 30.722 24.906 55.628 55.63 55.628ZM901.047 348.665l220.035 131.796C1133.59 489.628 1141 504.338 1141 520c0 15.662-7.41 30.372-19.918 39.539L901.047 691.335a47.406 47.406 0 0 1-48.007.014c-14.858-8.697-24.02-24.777-24.04-42.189V390.84c.02-17.412 9.182-33.492 24.04-42.19a47.406 47.406 0 0 1 48.007.015Zm786.155 584.668V136.054c0-16.23-13.157-29.387-29.388-29.387H260.434c-16.23 0-29.387 13.157-29.387 29.387v797.28h1456.155Zm0 106.667H231.047v67.099c0 16.23 13.157 29.387 29.388 29.387h1397.38c16.23 0 29.387-13.157 29.387-29.387V1040Z"
                                fill-rule="evenodd"></path>
                        </g>
                    </svg>
                    <span>Series</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('actor.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('actor-active')">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" class="inline-block h-4 w-4 mr-2 bi bi-columns-gap" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1 5C1 3.34315 2.34315 2 4 2H8.43845C9.81505 2 11.015 2.93689 11.3489 4.27239L11.7808 6H13.5H20C21.6569 6 23 7.34315 23 9V10C23 10.5523 22.5523 11 22 11C21.4477 11 21 10.5523 21 10V9C21 8.44772 20.5523 8 20 8H13.5H11.7808H4C3.44772 8 3 8.44772 3 9V10V19C3 19.5523 3.44772 20 4 20H8C8.55228 20 9 20.4477 9 21C9 21.5523 8.55228 22 8 22H4C2.34315 22 1 20.6569 1 19V10V9V5ZM3 6.17071C3.31278 6.06015 3.64936 6 4 6H9.71922L9.40859 4.75746C9.2973 4.3123 8.89732 4 8.43845 4H4C3.44772 4 3 4.44772 3 5V6.17071ZM17 19C14.2951 19 13 20.6758 13 22C13 22.5523 12.5523 23 12 23C11.4477 23 11 22.5523 11 22C11 20.1742 12.1429 18.5122 13.9952 17.6404C13.3757 16.936 13 16.0119 13 15C13 12.7909 14.7909 11 17 11C19.2091 11 21 12.7909 21 15C21 16.0119 20.6243 16.936 20.0048 17.6404C21.8571 18.5122 23 20.1742 23 22C23 22.5523 22.5523 23 22 23C21.4477 23 21 22.5523 21 22C21 20.6758 19.7049 19 17 19ZM17 17C18.1046 17 19 16.1046 19 15C19 13.8954 18.1046 13 17 13C15.8954 13 15 13.8954 15 15C15 16.1046 15.8954 17 17 17Z"
                                fill=""></path>
                        </g>
                    </svg>
                    <span>Actors</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('country.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('country-active')">
                    <svg width="64px" height="64px" class="inline-block h-4 w-4 mr-2 bi bi-columns-gap"  viewBox="0 0 32 32" enable-background="new 0 0 32 32" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="_x36_0"></g>
                            <g id="_x35_9"></g>
                            <g id="_x35_8"></g>
                            <g id="_x35_7"></g>
                            <g id="_x35_6"></g>
                            <g id="_x35_5"></g>
                            <g id="_x35_4"></g>
                            <g id="_x35_3"></g>
                            <g id="_x35_2"></g>
                            <g id="_x35_1"></g>
                            <g id="_x35_0"></g>
                            <g id="_x34_9"></g>
                            <g id="_x34_8"></g>
                            <g id="_x34_7"></g>
                            <g id="_x34_6"></g>
                            <g id="_x34_5"></g>
                            <g id="_x34_4"></g>
                            <g id="_x34_3"></g>
                            <g id="_x34_2"></g>
                            <g id="_x34_1"></g>
                            <g id="_x34_0"></g>
                            <g id="_x33_9"></g>
                            <g id="_x33_8"></g>
                            <g id="_x33_7"></g>
                            <g id="_x33_6"></g>
                            <g id="_x33_5"></g>
                            <g id="_x33_4"></g>
                            <g id="_x33_3"></g>
                            <g id="_x33_2"></g>
                            <g id="_x33_1"></g>
                            <g id="_x33_0"></g>
                            <g id="_x32_9"></g>
                            <g id="_x32_8"></g>
                            <g id="_x32_7"></g>
                            <g id="_x32_6"></g>
                            <g id="_x32_5"></g>
                            <g id="_x32_4_1_"></g>
                            <g id="_x32_3"></g>
                            <g id="_x32_2"></g>
                            <g id="_x32_1"></g>
                            <g id="_x32_0"></g>
                            <g id="_x31_9"></g>
                            <g id="_x31_8"></g>
                            <g id="_x31_7"></g>
                            <g id="_x31_6"></g>
                            <g id="_x31_5"></g>
                            <g id="_x31_4"></g>
                            <g id="_x31_3"></g>
                            <g id="_x31_2">
                                <path
                                    d="M30.1181641,15l0.7763672-1.5527344c0.1357422-0.2714844,0.140625-0.5893555,0.0141602-0.8652344 c-0.1269531-0.2753906-0.3720703-0.4785156-0.6660156-0.5522461L27,11.2192383V11c0-0.5522461-0.4477539-1-1-1h-2.5859375 L22,8.5859375V7c0-0.3081055-0.1420898-0.5986328-0.3847656-0.7880859 c-0.2431641-0.1899414-0.5605469-0.2583008-0.8579102-0.1821289l-4,1 c-0.2412109,0.0605469-0.4511719,0.2084961-0.5893555,0.4155273l-1.0439453,1.5664063l-0.2294922-0.4589844 c-0.144043-0.2875977-0.4169922-0.4882813-0.734375-0.5400391c-0.3144531-0.0488281-0.6401367,0.0537109-0.8671875,0.2802734 l-0.5336914,0.5336914L8.371582,7.0712891C8.152832,6.9838867,7.909668,6.9770508,7.6835938,7.0512695l-3,1 C4.159668,8.2260742,3.8764648,8.7924805,4.0512695,9.3164063l0.7255859,2.1772461l-1.2241211,0.6118164 C3.2138672,12.2749023,3,12.6210938,3,13v1.3818359l-1.4472656,0.7236328 c-0.4941406,0.2470703-0.6943359,0.8476563-0.4472656,1.3417969l1,2C2.2749023,18.7861328,2.6210938,19,3,19h4 c0.2651367,0,0.5195313-0.1054688,0.7070313-0.2929688l0.8330078-0.8330078l2.1899414-0.7299805L13.5859375,20 l-1.2929688,1.2929688c-0.0761719,0.0756836-0.1391602,0.1635742-0.1875,0.2597656l-1,2 c-0.1923828,0.3852539-0.1166992,0.8500977,0.1875,1.1542969l1,1C12.4804688,25.8945313,12.7348633,26,13,26h1 c0.2651367,0,0.5195313-0.1054688,0.7070313-0.2929688L16,24.4140625l0.2929688,0.2929688 c0.2270508,0.2265625,0.5483398,0.3286133,0.8671875,0.2802734c0.3173828-0.0517578,0.590332-0.2524414,0.734375-0.5400391 L18,24.2358398V25c0,0.3789063,0.2138672,0.7250977,0.5527344,0.8945313L20,26.6181641V27 c0,0.3466797,0.1796875,0.668457,0.4741211,0.8505859C20.6347656,27.949707,20.8173828,28,21,28 c0.152832,0,0.3061523-0.0351563,0.4472656-0.1054688l4-2c0.1933594-0.0966797,0.3505859-0.2539063,0.4472656-0.4472656l1-2 c0.1923828-0.3852539,0.1166992-0.8500977-0.1875-1.1542969c-0.3032227-0.3037109-0.7685547-0.3793945-1.1542969-0.1875 l-1.1054688,0.5527344l-0.1386719-0.2773438l4.2060547-2.5234375c0.1630859-0.0976563,0.2949219-0.2402344,0.3798828-0.4101563 L29.6181641,18H30c0.3466797,0,0.668457-0.1796875,0.8505859-0.4741211 c0.1821289-0.2949219,0.1987305-0.6630859,0.0439453-0.9731445L30.1181641,15z M28.1054688,14.5527344 c-0.140625,0.2817383-0.140625,0.612793,0,0.8945313l0.3554688,0.7104492 c-0.1494141,0.0957031-0.2729492,0.2304688-0.3554688,0.3950195l-0.8696289,1.7397461l-4.7504883,2.8500977 c-0.4477539,0.2685547-0.6132813,0.8374023-0.3798828,1.3046875l1,2c0.0537109,0.1074219,0.1240234,0.2006836,0.206543,0.2788086 l-1.4697266,0.7348633c-0.0957031-0.1494141-0.2304688-0.2729492-0.3950195-0.3554688L20,24.3818359v-0.1459961 l0.8945313-1.7885742c0.1547852-0.3100586,0.1381836-0.6782227-0.0439453-0.9731445C20.668457,21.1796875,20.3466797,21,20,21h-2 c-0.3789063,0-0.7250977,0.2138672-0.8945313,0.5527344l-0.3793945,0.7592773l-0.019043-0.019043 c-0.390625-0.390625-1.0234375-0.390625-1.4140625,0L13.5859375,24h-0.171875l-0.1972656-0.1972656l0.6049805-1.2104492 l1.8852539-1.8852539c0.390625-0.390625,0.390625-1.0234375,0-1.4140625l-4-4 c-0.2680664-0.269043-0.6640625-0.3623047-1.0234375-0.2416992l-3,1c-0.1469727,0.0493164-0.2807617,0.1318359-0.390625,0.2416992 L6.5859375,17H3.6181641l-0.2763672-0.5527344l1.1054688-0.5527344C4.7861328,15.7250977,5,15.3789063,5,15v-1.3818359 l1.4472656-0.7236328c0.4448242-0.2226563,0.6586914-0.7387695,0.5014648-1.2109375L6.2651367,9.6323242L7.96875,9.0644531 l4.659668,1.8642578c0.3720703,0.1479492,0.7963867,0.0620117,1.0786133-0.2216797l0.019043-0.019043l0.3793945,0.7592773 c0.159668,0.3188477,0.4765625,0.5288086,0.8325195,0.5507813c0.3510742,0.0263672,0.6962891-0.1469727,0.894043-0.4433594 l1.7856445-2.6782227L20,8.2807617V9c0,0.2651367,0.1054688,0.5195313,0.2929688,0.7070313l2,2 C22.4804688,11.8945313,22.7348633,12,23,12h2c0,0.4589844,0.3125,0.8588867,0.7573242,0.9702148l2.7905273,0.6977539 L28.1054688,14.5527344z"
                                    fill="currentColor"></path>
                            </g>
                            <g id="_x31_1"></g>
                            <g id="_x31_0"></g>
                            <g id="_x39_"></g>
                            <g id="_x38_"></g>
                            <g id="_x37_"></g>
                            <g id="_x36_"></g>
                            <g id="_x35_"></g>
                            <g id="_x34_"></g>
                            <g id="_x33_"></g>
                            <g id="_x32_"></g>
                            <g id="_x31_"></g>
                            <g id="topic"></g>
                            <g id="Guides"></g>
                        </g>
                    </svg>
                    <span>Countries</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('type.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('type-active')">
                    <svg fill="currentColor" class="inline-block h-4 w-4 mr-2 bi bi-columns-gap" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 173" enable-background="new 0 0 256 173"
                        xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M128.253,56.864c15.186,0,27.432-12.247,27.432-27.432S143.536,2,128.253,2 c-15.186,0-27.432,12.247-27.432,27.432C100.918,44.716,113.165,56.864,128.253,56.864z M64.571,136.32h-49.28 c-15.969,0-16.851-24.395,0.294-24.395H58.3l24.493-36.054c7.25-9.895,15.48-14.598,27.138-14.598h36.544 c11.659,0,19.888,4.311,27.138,14.598l24.591,36.054h43.01c17.243,0,16.165,24.395,0.588,24.395h-49.28 c-3.919,0-8.622-1.372-11.365-5.584l-18.811-26.844l-0.098,67.209H94.844l-0.098-67.209l-18.811,26.844 C73.192,134.85,68.49,136.32,64.571,136.32z">
                            </path>
                            <g>
                                <path
                                    d="M63.218,67.143v11.681c0,6.44-5.24,11.681-11.681,11.681h-1.062v4.248c0,2.347-1.901,4.248-4.248,4.248H16.495 c-2.347,0-4.248-1.901-4.248-4.248V54.916C9.718,53.509,8,50.809,8,47.716c0-4.253,3.241-7.762,7.383-8.187 c1.407-4.935,5.989-8.49,11.245-8.49c3.273,0,6.371,1.372,8.567,3.735c1.187-0.523,2.477-0.796,3.799-0.796 c4.534,0,8.4,3.318,9.246,7.664c3.066,0.873,5.291,3.703,5.291,7.019c0,2.442-1.208,4.609-3.056,5.933v6.178h6.371 C60.359,60.772,63.218,63.631,63.218,67.143z M22.866,65.019h-4.248v21.238h4.248V65.019z M33.485,65.019h-4.248v21.238h4.248 V65.019z M44.104,65.019h-4.248v21.238h4.248V65.019z M49.815,48.661c0-1.895-1.481-3.467-3.369-3.576l-1.707-0.098l-0.045-1.707 c-0.082-3.079-2.639-5.586-5.7-5.586c-1.157,0-2.27,0.342-3.215,0.993l-1.529,1.051l-1.051-1.529 c-1.492-2.164-3.948-3.454-6.57-3.454c-3.953,0-7.346,2.944-7.895,6.847l-0.226,1.601H16.23c-2.487,0-4.513,2.026-4.513,4.513 s2.026,4.561,4.513,4.561h4.513v4.248c0,2.347,1.901,4.248,4.248,4.248s4.248-1.901,4.248-4.248v-4.248h16.99 C48.203,52.277,49.815,50.636,49.815,48.661z M58.971,67.143c0-1.171-0.953-2.124-2.124-2.124h-6.371v21.238h1.062 c4.099,0,7.433-3.334,7.433-7.433V67.143z">
                                </path>
                            </g>
                            <path
                                d="M223.804,73.6v21.7h12.617V99h-28.409v-3.7h12.976V73.6c0-0.801-5.798-5.963-9.608-8.669 c-3.285-2.347-8.835-6.46-8.835-17.283c0-8.78,5.108-16.648,5.108-16.648h29.514c0,0,5.108,7.813,5.108,16.565 c0,10.823-5.549,14.936-8.862,17.283C229.602,67.581,223.804,72.717,223.804,73.6z M205.362,47.648c0,0.11,0,0.248,0,0.387h34.069 c0-0.138,0-0.304,0-0.469c0-5.825-2.927-13.721-4.252-13.721h-25.538C208.316,36.163,205.362,41.823,205.362,47.648z">
                            </path>
                            <g id="shopping_cart"> </g>
                            <g id="cross"> </g>
                            <g id="leaf"> </g>
                        </g>
                    </svg>
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
                    <svg class="inline-block h-4 w-4 mr-2 bi bi-columns-gap" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 8C16 6.34315 14.6569 5 13 5H4C2.34315 5 1 6.34315 1 8V16C1 17.6569 2.34315 19 4 19H13C14.6569 19 16 17.6569 16 16V13.9432L21.4188 17.8137C21.7236 18.0315 22.1245 18.0606 22.4576 17.8892C22.7907 17.7178 23 17.3746 23 17V7C23 6.62541 22.7907 6.28224 22.4576 6.11083C22.1245 5.93943 21.7236 5.96854 21.4188 6.18627L16 10.0568V8ZM16.7205 12L21 8.94319V15.0568L16.7205 12ZM13 7C13.5523 7 14 7.44772 14 8V12V16C14 16.5523 13.5523 17 13 17H4C3.44772 17 3 16.5523 3 16V8C3 7.44772 3.44772 7 4 7H13Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <span>Quality</span>
                </a>
            </li>

            <li class="relative">
                <a href="{{ route('slider.index') }}" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300 @yield('slider-active')">
                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" class="inline-block h-4 w-4 mr-2 bi bi-columns-gap" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M19.75 16C19.75 16.41 19.41 16.75 19 16.75H6.81L8.03 17.97C8.32 18.26 8.32 18.74 8.03 19.03C7.88 19.18 7.69 19.25 7.5 19.25C7.31 19.25 7.12 19.18 6.97 19.03L4.47 16.53C4.4 16.46 4.35 16.38 4.31 16.29C4.23 16.11 4.23 15.9 4.31 15.72C4.35 15.63 4.4 15.55 4.47 15.48L6.97 12.98C7.26 12.69 7.74 12.69 8.03 12.98C8.32 13.27 8.32 13.75 8.03 14.04L6.81 15.26H19C19.41 15.26 19.75 15.6 19.75 16.01V16ZM5 8.75001H17.19L15.97 9.97001C15.68 10.26 15.68 10.74 15.97 11.03C16.12 11.18 16.31 11.25 16.5 11.25C16.69 11.25 16.88 11.18 17.03 11.03L19.53 8.53001C19.6 8.46001 19.65 8.38001 19.69 8.29001C19.77 8.11001 19.77 7.90001 19.69 7.72001C19.65 7.63001 19.6 7.55001 19.53 7.48001L17.03 4.98001C16.74 4.69001 16.26 4.69001 15.97 4.98001C15.68 5.27001 15.68 5.75001 15.97 6.04001L17.19 7.26001H5C4.59 7.26001 4.25 7.60001 4.25 8.01001C4.25 8.42001 4.59 8.76001 5 8.76001V8.75001Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                    <span>Sliders</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
