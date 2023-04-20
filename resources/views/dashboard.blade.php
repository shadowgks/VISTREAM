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
                                <h3 class="text-base font-bold mb-2">Users</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $users_count }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-color-secondary opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-color-secondary opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Media</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $media }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Movies</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $movies }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Series</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $series }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Genres</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $genres }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-teal-400 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-teal-400 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Actors</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $actors }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-green-200 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-green-200 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Countries</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $countries }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-blue-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-blue-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Qualities</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $qualities }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-orange-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-orange-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Sliders</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $sliders }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-red-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-red-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- target widget -->
                        <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6">
                            <div class="bg-white dark:bg-color-primary-75 rounded-lg shadow-lg h-full p-6 relative overflow-hidden">
                                <h3 class="text-base font-bold mb-2">Types</h3>
                                <h2 class="text-3xl font-bold mb-4">{{ $types }}</h2>

                                <!-- bg circle -->
                                <div class="absolute -right-16  -top-16">
                                    <div class="bg-sky-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
                                    </div>
                                </div>
                                <div class="absolute -right-4 rtl:-left-4 -top-24">
                                    <div class="bg-sky-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10">
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
                                                <table class="table-sorter table-bordered w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead>
                                                        <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                                            <th>#</th>
                                                            <th>Fullname</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            {{-- <th>Actions</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $key => $item)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>
                                                                    {{ $item->name }}
                                                                </td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>{{ $item->status == 1 ? 'Admin' : 'User' }}</td>
                                                                {{-- <td>Action</td> --}}
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
