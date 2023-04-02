@extends('layouts.media.master')

@section('title')
    Play Media
@endsection

@section('content')
    <!-- media -->
    <div class="w-container m-auto">
        <!-- Breadcrumb -->
        <nav class="flex my-4 text-gray-400" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $media_play->type_id == 1 ? 'Movies' : 'Series' }}</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400 uppercase">{{ $media_play->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
        <!-- video -->
        <div>
            <video class="w-full h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" controls>
                <source src="{{ $media_play->link_media }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        @if ($media_play->type_id == 2)
            <!-- session & episodes -->
            <div class="mt-7">
                <!-- tab links Session-->
                <div class="mb-4 border-b dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <a href="" class="inline-block p-4 border-b-2 rounded-t-lg text-color-links" id="session1-tab" data-tabs-target="#session1" type="button" role="tab" aria-controls="session1" aria-selected="false">Session 1</a>
                        </li>
                        <li class="mr-2" role="presentation">
                            <a href="" class="inline-block p-4 border-b-2 rounded-t-lg text-color-links" id="session2-tab" data-tabs-target="#session2" type="button" role="tab" aria-controls="session2" aria-selected="false">Session 2</a>
                        </li>
                    </ul>
                </div>

                <!-- Episode -->
                <div id="myTabContent">
                    <p class="text-gray-400 font-bold text-lg text-center uppercase mb-4">Episodes</p>
                    <div class="hidden p-4 rounded-lg text-center bg-color-primary-75" id="session1" role="tabpanel" aria-labelledby="session-tab">
                        <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-14 py-2.5 text-center mr-2 mb-2">Episode
                            1</button>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="session2" role="tabpanel" aria-labelledby="dashboard-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                            The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- main -->
        <div class="my-8 lg:flex lg:gap-5">
            <!-- info_media -->
            <div class="lg:w-[75%] bg-color-primary-75 lg:grid grid-cols-4 rounded-sm">
                <!-- picture -->
                <div class="mb-3 md:mb-0 w-full">
                    <img src="{{ asset($media_play->picture) }}" alt="{{ $media_play->name }}" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                </div>
                <!-- info -->
                <div class="py-2 px-4 md:p-8 col-span-3">
                    <!-- heading -->
                    <div class="md:flex md:justify-between">
                        <!-- title -->
                        <p class="text-white text-2xl font-bold">{{ $media_play->name }}</p>
                        {{-- <!-- rating -->
                        <div class="flex items-center cursor-pointer">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-300 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div> --}}
                    </div>
                    <!-- heading-mini -->
                    <div class="flex gap-6 my-2">
                        <span class="bg-color-secondary text-white text-xs md:font-medium px-2.5 py-0.5 md:rounded-full uppercase">{{ $media_play->qualitie->name }}</span>
                        <a href="{{ $media_play->link_imdb }}">
                            <p class="text-yellow-400 text-sm font-bold"><i class="fa-solid fa-star"></i> IMDB</p>
                        </a>
                        <p class="text-gray-400 text-sm font-bold">{{ $media_play->duration }} min</p>
                    </div>
                    <!-- description -->
                    <div class="my-2">
                        <p class="text-gray-400 text-sm">{{ $media_play->description }}.</p>
                    </div>
                    <!-- content info -->
                    <div class="mb-6 flex gap-5">
                        <div>
                            <p class="text-gray-500 text-sm ">Country : </p>
                            <p class="text-gray-500 text-sm ">Genre : </p>
                            <p class="text-gray-500 text-sm ">Release : </p>
                            <p class="text-gray-500 text-sm ">Director : </p>
                            <p class="text-gray-500 text-sm ">Production: </p>
                            <p class="text-gray-500 text-sm">Cast : </p>
                        </div>
                        <div>
                            <a href="" class="text-gray-400 text-sm [80%] hover:text-color-links">{{ $media_play->countries->name }}</a>
                            <div>
                                @foreach ($media_play->genres as $genre)
                                    <a href="" class="text-gray-400 text-sm hover:text-color-links">{{ $genre->name }},</a>
                                @endforeach
                            </div>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->released_year }}</p>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->director }}</p>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->production }}</p>
                            <div>
                                @foreach ($media_play->actors as $actor)
                                    <a href="#" class="text-gray-400 text-sm hover:text-color-links">{{ $actor->fullname }},</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- footer trailer -->
                    <div>
                        <a href="{{ $media_play->trailer }}"
                            class="relative inline-flex items-center justify-center px-10 mb-2 mr-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 focus:ring-4">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0">
                                Trailer
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- You may also like -->
            <div class="lg:w-[35%] bg-color-primary-75 rounded-sm p-4">
                <!-- headign -->
                <h2 class="text-white font-bold text-2xl">You may also like
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <!-- All cards -->
                <div class="items-media grid grid-cols-2 gap-3 mt-10 my-4">
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
                </div>
            </div>
        </div>
    </div>
@endsection
