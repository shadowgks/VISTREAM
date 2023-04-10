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
                        <a href="{{ $serie_play->type_id == 1 ? route('movies.index') : route('series.index') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $serie_play->type_id == 1 ? 'Movies' : 'Series' }}</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400 uppercase">{{ $serie_play->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- video -->
        @include('media.components.video')

        <!-- session & episodes -->
        <div class="mt-7">
            <!-- tab links Session-->
            <div class="mb-4 border-b dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    @foreach ($season_episode as $season)
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg text-color-links" data-tabs-target="#session{{ $season->num_season }}" type="button" role="tab">Session {{ $season->num_season }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Episode -->
            <div id="myTabContent">
                <p class="text-gray-400 font-bold text-lg text-center uppercase mb-4">Episodes</p>
                @foreach ($season_episode as $season)
                    <div class="grid sm:grid-cols-7 hidden py-14 px-4 rounded-lg text-center bg-color-primary-75" id="session{{ $season->num_season }}" role="tabpanel" aria-labelledby="session-tab">
                        @foreach ($season->episodes as $ep)
                            <a href="{{ route('play-serie.show', [$season->media->slug, $season->num_season, $ep->num_ep]) }}"
                                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-14 py-2.5 mr-2 mb-2">Episode
                                {{ $ep->num_ep }}</a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        <!-- main -->
        <div class="my-8 lg:flex lg:gap-5">
            <!-- info_media -->
            <div class="lg:w-[75%] bg-color-primary-75 lg:grid grid-cols-4 rounded-sm">
                <!-- picture -->
                <div class="mb-3 md:mb-0 w-full">
                    <img src="{{ asset($serie_play->picture) }}" alt="{{ $serie_play->name }}" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                </div>
                <!-- info -->
                <div class="py-2 px-4 md:p-8 col-span-3">
                    <!-- heading -->
                    <div class="md:flex md:justify-between">
                        <!-- title -->
                        <p class="text-white text-2xl font-bold">{{ $serie_play->name }}</p>
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
                        <span class="bg-color-secondary text-white text-xs md:font-medium px-2.5 py-0.5 md:rounded-full uppercase">{{ $serie_play->qualitie->name }}</span>
                        <a href="{{ $serie_play->link_imdb }}">
                            <p class="text-yellow-400 text-sm font-bold"><i class="fa-solid fa-star"></i> IMDB</p>
                        </a>
                        <p class="text-gray-400 text-sm font-bold">{{ $serie_play->duration }} min</p>
                    </div>
                    <!-- description -->
                    <div class="my-2">
                        <p class="text-gray-400 text-sm">{{ $serie_play->description }}.</p>
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
                            <a href="" class="text-gray-400 text-sm [80%] hover:text-color-links">{{ $serie_play->countries->name }}</a>
                            <div>
                                @foreach ($serie_play->genres as $genre)
                                    <a href="" class="text-gray-400 text-sm hover:text-color-links">{{ $genre->name }},</a>
                                @endforeach
                            </div>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $serie_play->released_year }}</p>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $serie_play->director }}</p>
                            <p class="text-gray-400 text-sm hover:text-color-links">{{ $serie_play->production }}</p>
                            <div>
                                @foreach ($serie_play->actors as $actor)
                                    <a href="#" class="text-gray-400 text-sm hover:text-color-links">{{ $actor->fullname }},</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- footer trailer -->
                    <div>
                        <a href="{{ $serie_play->trailer }}"
                            class="relative inline-flex items-center justify-center px-10 mb-2 mr-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 focus:ring-4">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0">
                                Trailer
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- You may also like -->
            @include('media.components.you_may_also_like')
        </div>
    </div>
@endsection
