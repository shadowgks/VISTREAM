@extends('layouts.dashboard.master')

@section('title')
    Dashboard
@endsection

@section('dashboard-active')
    dark:text-gray-300
@endsection

@section('content')
    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row title -->
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <p class="text-xl font-bold mt-3 mb-5">@yield('title')</p>
                </div>
            </div>
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full w-full">
                    <div class="flex flex-wrap flex-row">
                        <!--B statistic -->
                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Sales</h3>
                                <h2 class="text-3xl font-bold mb-4">1,200</h2>
                                <!-- target -->
                                <div class="flex flex-row justify-between w-full">
                                    <div class="flex items-center" title="Target">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> 1100
                                    </div>
                                    <div class="flex items-center text-green-500">
                                        +5%
                                    </div>
                                </div>

                                <!-- bg circle -->
                                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16">
                                    <div class="bg-color-secondary opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24">
                                    <div class="bg-color-secondary opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Revenue</h3>
                                <h2 class="text-3xl font-bold mb-4">$12,500</h2>
                                <!-- target -->
                                <div class="flex flex-row justify-between w-full">
                                    <div class="flex items-center" title="Target">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> $9,600
                                    </div>
                                    <div class="flex items-center text-green-500">
                                        +25%
                                    </div>
                                </div>

                                <!-- bg circle -->
                                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16">
                                    <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24">
                                    <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Profit</h3>
                                <h2 class="text-3xl font-bold mb-4">$5,200</h2>
                                <!-- target -->
                                <div class="flex flex-row justify-between w-full">
                                    <div class="flex items-center" title="Target">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> $4500
                                    </div>
                                    <div class="flex items-center text-green-500">
                                        +10%
                                    </div>
                                </div>

                                <!-- bg circle -->
                                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16">
                                    <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24">
                                    <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Costs</h3>
                                <h2 class="text-3xl font-bold mb-4">$7,200</h2>
                                <!-- target -->
                                <div class="flex flex-row justify-between w-full">
                                    <div class="flex items-center" title="Target">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg> $6100
                                    </div>
                                    <div class="flex items-center text-red-500">
                                        -15%
                                    </div>
                                </div>

                                <!-- bg circle -->
                                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16">
                                    <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24">
                                    <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--E statistic -->

                        <!-- Sales Leaderboard -->
                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6">
                                <div class="flex flex-row justify-between pb-3">
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold">Users</h3>
                                    </div>
                                </div>
                                <div class="relative">
                                    {{-- Modal add --}}
                                    <div x-data='{ open2: false }'>
                                        <div x-data='{ open: false }'>
                                            {{-- dataTable --}}
                                            <div class="bg-white p-8 dark:bg-color-primary-75 h-fit">
                                                <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead>
                                                        <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                                            <th>#</th>
                                                            <th>Fullname</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($user as $key => $item)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>
                                                                    <a href="#">
                                                                        <img class="object-cover inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 border-gray-200 dark:bg-gray-800 border-2 dark:border-gray-600" src="{{ URL::asset($item->profile_photo_path) }}"
                                                                            alt="Image Description">
                                                                    </a>
                                                                    {{ $item->name }}
                                                                </td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>{{ $item->status }}</td>
                                                                <td>Action</td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
