<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('layouts.dashboard.includes.head')
</head>

<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-color-primary">
    <!-- wrapper -->
    <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100 dark:bg-color-primary-75 dark:bg-opacity-40">
        <!--B Sidebar menu -->
        @include('layouts.dashboard.sidebar')
        <!--E Sidebar menu -->

        <!-- main -->
        <div x-bind:aria-expanded="open"
            :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }"
            class="flex flex-col ltr:ml-64 rtl:mr-64 min-h-screen transition-all duration-500 ease-in-out">
            <!-- Navbar -->
            @include('layouts.dashboard.navbar')
            <!-- End Navbar -->

            {{-- content --}}
            @yield('content')

            {{-- B footer --}}
            @include('layouts.dashboard.footer')
            {{-- E footer --}}
        </div>
    </div>

    @include('layouts.dashboard.includes.scripte')
</body>

</html>
