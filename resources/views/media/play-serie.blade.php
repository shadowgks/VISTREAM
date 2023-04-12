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
                        <a href="{{ $media_play->type_id == 1 ? route('movies.index') : route('series.index') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $media_play->type_id == 1 ? 'Movies' : 'Series' }}</a>
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
        @include('media.components.play_media')
    </div>
@endsection
