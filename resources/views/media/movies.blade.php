@extends('layouts.media.master')

@section('title')
    Movies
@endsection

@section('link_movies_active')
    text-white
@endsection

@section('content')
    <!-- Main Movies-->
    <div class="w-container m-auto">
        <section class="mt-14">
            <!-- heading -->
            <div class="text-bold flex flex-col gap-5 md:flex-row md:gap-0 md:justify-between md:items-center">
                <h2 class="text-white font-bold text-3xl">Movies
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <div>
                    <button data-collapse-toggle="filters" class="text-sm font-medium mr-2 px-2.5 py-0.5 dark:bg-color-secondary dark:text-white">Filter <i class="fa-solid fa-filter text-[13px]"></i></button>
                </div>
            </div>

            <!-- filter -->
            <div id="filters" class="w-full my-10 shadow p-5 rounded-lg bg-color-primary-75 hidden">
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
            </div>

            <!-- All cards -->
            <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                @foreach ($movies as $item)
                    <!-- card -->
                    <div class="cursor-pointer" data-popover-target="popover-media" data-popover-placement="right">
                        <!-- content Card -->
                        <div>
                            <div class="relative">
                                <img src="{{ asset('build/assets/images/media/kingsman.jpg') }}" alt=" random imgee" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                                <span class="bg-color-secondary text-white text-xs font-bold mr-2 px-2.5 py-0.5 absolute top-0 right-0 my-4 uppercase">bluray</span>
                                <a href="" class="absolute text-white left-3 top-3 text-2xl hover:text-red-500 duration-500"><i class="fa-solid fa-heart"></i></a>
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
                        </div>
                        <!-- popover Card
                                                                        <div data-popover id="popover-media" role="tooltip"
                                                                            class="absolute z-10 invisible inline-block w-64 text-sm font-light text-white transition-opacity duration-300 bg-color-primary border rounded-lg shadow-sm opacity-0">
                                                                            <div class="px-3 py-2">
                                                                                <p>And here's some amazing content. It's very engaging. Right?</p>
                                                                            </div>
                                                                            <div data-popper-arrow></div>
                                                                        </div> -->
                    </div>
                @endforeach
            </div>
        </section>


        <!-- pagination -->
        <nav class="flex justify-center mt-10" aria-label="Page navigation example">
            {{ $movies->links('pagination::tailwind') }}
        </nav>
    </div>
@endsection
