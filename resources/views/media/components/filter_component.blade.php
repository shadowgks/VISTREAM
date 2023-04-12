{{-- <div id="filters" class="w-full my-10 shadow p-5 rounded-lg bg-color-primary-75 hidden delay-500">
    <!-- heading filter -->
    <div class="flex items-center justify-between mt-4">
        <p class="font-bold text-white">
            Filters
        </p>
        <button class="px-4 py-2 bg-red-600 text-white hover:bg-gray-200 hover:text-gray-900 text-sm font-medium rounded-md">
            Reset Filter
        </button>
    </div>

    <!-- all dropdowns filter -->
    <div>
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
            <select class="px-4 py-3 w-full rounded-md bg-gray-700 text-gray-300 outline-none focus:bg-color-secondary focus:text-white duration-700 font-medium focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="">For Rent</option>
                <option value="">For Sale</option>
            </select>
            <select class="px-4 py-3 w-full rounded-md bg-gray-700 text-gray-300 outline-none focus:bg-color-secondary focus:text-white duration-700 font-medium focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="">For Rent</option>
                <option value="">For Sale</option>
            </select>
            <select class="px-4 py-3 w-full rounded-md bg-gray-700 text-gray-300 outline-none focus:bg-color-secondary focus:text-white duration-700 font-medium focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="">For Rent</option>
                <option value="">For Sale</option>
            </select>
            <select class="px-4 py-3 w-full rounded-md bg-gray-700 text-gray-300 outline-none focus:bg-color-secondary focus:text-white duration-700 font-medium focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="">For Rent</option>
                <option value="">For Sale</option>
            </select>
            <select class="px-4 py-3 w-full rounded-md bg-gray-700 text-gray-300 outline-none focus:bg-color-secondary focus:text-white duration-700 font-medium focus:ring-0 text-sm">
                <option value="">All Type</option>
                <option value="">For Rent</option>
                <option value="">For Sale</option>
            </select>
        </div>
    </div>

    <!-- submit filter -->
    <div class="mt-4">
        <form action="">
            <button class="px-4 py-2 bg-color-secondary text-white hover:bg-gray-200 hover:text-gray-900 text-sm font-medium rounded-md">
                Submit
            </button>
        </form>
    </div>
</div> --}}
<div class="flex items-center justify-center p-4">
    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        type="button">
        Filter by category
        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
            Category
        </h6>
        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
            <li class="flex items-center">
                <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Apple (56)
                </label>
            </li>

            <li class="flex items-center">
                <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Fitbit (56)
                </label>
            </li>

            <li class="flex items-center">
                <input id="dell" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Dell (56)
                </label>
            </li>

            <li class="flex items-center">
                <input id="asus" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Asus (97)
                </label>
            </li>

            <li class="flex items-center">
                <input id="logitech" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="logitech" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Logitech (97)
                </label>
            </li>

            <li class="flex items-center">
                <input id="msi" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="msi" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    MSI (97)
                </label>
            </li>

            <li class="flex items-center">
                <input id="bosch" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="bosch" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Bosch (176)
                </label>
            </li>

            <li class="flex items-center">
                <input id="sony" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="sony" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Sony (234)
                </label>
            </li>

            <li class="flex items-center">
                <input id="samsung" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="samsung" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Samsung (76)
                </label>
            </li>

            <li class="flex items-center">
                <input id="canon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="canon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Canon (49)
                </label>
            </li>

            <li class="flex items-center">
                <input id="microsoft" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="microsoft" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Microsoft (45)
                </label>
            </li>

            <li class="flex items-center">
                <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    Razor (49)
                </label>
            </li>
        </ul>
    </div>
</div>
