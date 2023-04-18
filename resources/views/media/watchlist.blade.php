@extends('layouts.media.master')

@section('title')
    Watchlist
@endsection

@section('content')
    <!-- watchlist -->
    <div class="w-container m-auto">
        <!-- Breadcrumb -->
        <nav class="flex my-4 text-gray-400" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('media.watchlist') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">@yield('title')</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400 uppercase">{{ Auth::user()->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- section movies and menu -->
        <section class="my-10 lg:flex lg:gap-4 lg:justify-center">
            <div class="lg:w-[20%] bg-color-primary-75 rounded py-7 px-5 order-2 text-center mb-4 rounded">
                <a href="{{ route('profile.show') }}"
                    class="relative w-full inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-800">
                    <span class="relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        <i class="fa-solid fa-user mr-3"></i> Edit Profile
                    </span>
                </a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    <a href="{{ route('logout') }}"
                        class="relative w-full inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-800">
                        <span class="relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            <i class="fa-solid fa-right-from-bracket mr-3"></i> Sign out
                        </span>
                    </a>
                </form>
            </div>
            <div class="lg:w-[80%]">
                <!-- heading -->
                <div class="text-bold flex flex-col gap-5 md:flex-row md:gap-0 md:justify-between md:items-center">
                    <h2 class="text-white font-bold text-3xl">Watchlist <i class="fa-solid fa-heart text-3xl text-red-500"></i>
                        <hr class="w-20 mt-2 border-2 border-color-three">
                    </h2>
                </div>

                <!-- cards movies & series -->
                    <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-3 mt-10 my-4">
                        {{-- <div class="cursor-pointer" data-popover-target="popover-media" data-popover-placement="right">
                            <!-- content Card -->
                            <div class="relative">
                                <img src="{{ asset('build/assets/images/media/kingsman.jpg') }}" alt=" random imgee" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                                <span class="bg-color-secondary text-white text-xs font-bold mr-2 px-2.5 py-0.5 absolute top-0 right-0 my-4 uppercase">bluray</span>
                                <a href="" class="absolute text-white left-3 top-3 text-2xl hover:text-red-500 duration-500"><i class="fa-solid fa-rectangle-xmark text-red-500"></i></a>
                            </div>
                            <div class="my-2">
                                <p class="text-lg font-bold text-white">Name Movie</p>
                                <div class="flex justify-between items-center text-gray-500">
                                    <!-- date & min -->
                                    <div class="flex">
                                        <p>2022</p>
                                        <span class="font-extrabold mx-2"> . </span>
                                        <p>189min</p>
                                    </div>
                                    <!-- movie or tv -->
                                    <span class="bg-gray-700 text-gray-300 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Movie</span>
                                </div>
                            </div>

                            <!-- popover Card
                                                    <div data-popover id="popover-media" role="tooltip"
                                                        class="absolute z-10 invisible inline-block w-64 text-sm font-light text-white transition-opacity duration-300 bg-color-primary border rounded-lg shadow-sm opacity-0">
                                                        <div class="px-3 py-2">
                                                            <p>And here's some amazing content. It's very engaging. Right?</p>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div> -->
                        </div> --}}
                        @if ($watchlist->media->count() != 0)
                            @foreach ($watchlist->media as $item)
                                @include('media.components.card')
                            @endforeach
                        @else
                            {{-- is empty 'SOON' --}}
                        @endif

                    </div>
            </div>
        </section>

        <!-- pagination -->
        {{-- soon --}}
    </div>
@endsection
