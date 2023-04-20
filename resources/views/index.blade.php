@extends('layouts.media.master')

@section('title')
    Home
@endsection

@section('link_home_active')
    text-white
@endsection

@section('slider')
    <div class="swiper mb-10 bg-fixed">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($sliders as $item)
                @if ($item->sliders != null)
                    <div class="swiper-slide">
                        <div class="flex items-center h-screen bg-cover text-white px-10 bg-bottom" style="background-image: url({{ asset($item->sliders->picture) }})">
                            <div class="w-80 md:w-1/2 mb-32 md:ml-14 m-2 text-start backdrop-brightness-50 bg-color-primary bg-transparent backdrop-blur-sm px-4 py-8 rounded-xl">
                                <span class="font-semibold text-base uppercase">{{ $item->types->name }}</span>
                                <span class="text-sm pl-2 pr-2 text-gray-300">{{ $item->duration }} min</span>
                                <span class="bg-color-secondary text-color-links text-xs font-medium mr-2 px-2.5 py-0.5 rounded uppercase">{{ $item->qualitie->name }}</span>
                                <p class="text-3xl md:text-4xl font-bold mb-2">{{ $item->name }}</p>
                                <p>
                                    @foreach ($item->genres as $item2)
                                        <a class="decoration-slice font-semibold text-sm text-gray-200 mr-2" href="#">{{ $item2->name }}</a>
                                    @endforeach
                                </p>
                                <p class="text-lg mt-3 text-gray-300 mb-6 leading-none truncate">{{ $item->description }}</p>
                                <a href="{{ $item->type_id == 1 ? route('play-movie.show', $item->slug) : route('play-serie.show', [$item->slug, 1, 1]) }}" class="bg-color-secondary py-2 px-8 text-white rounded-full font-bold uppercase md:text-sm hover:bg-gray-200 hover:text-gray-800"><i class="fa-brands fa-google-play"></i> Watch
                                    Now</a>
                                {{-- <a href="#" class="text-[8px] bg-transparent border border-color-three py-2 px-8 text-white rounded-full font-bold uppercase md:text-sm hover:bg-gray-200 hover:text-gray-800"><i class="fa-regular fa-heart"></i> Add
                                    to list</a> --}}
                            </div>
                        </div> <!-- container -->
                    </div>
                @endif
            @endforeach

        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
@endsection

@section('content')
    <!-- Main Movies & Series -->
    <div class="mx-6 bg-fixed">
        <!-- Recommended -->
        <section class="">
            <!-- heading -->
            <div class="md:flex md:items-center gap-10">
                <h2 class="text-white font-bold text-3xl">Recommended
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <div class="tabs mt-8 flex justify-center md:block md:m-0">
                    <ul class="flex text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <span class="cursor-pointer bg-color-secondary text-white text-xs font-medium mr-2 px-6 py-2 rounded" id="movies-tab" data-tabs-target="#movies" type="button" role="tab" aria-controls="movies" aria-selected="false">Movies</span>
                        </li>
                        <li class="mr-2" role="presentation">
                            <span class="cursor-pointer bg-color-secondary text-white text-xs font-medium mr-2 px-6 py-2 rounded" id="series-tab" data-tabs-target="#series" type="button" role="tab" aria-controls="series" aria-selected="false">Series</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- tag movies -->
            <div class="hidden" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                <!-- All cards -->
                <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                    @foreach ($recommended as $item)
                        <!-- recommended movie-->
                        @if ($item->type_id == 1)
                            @include('media.components.card')
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- tag series -->
            <div class="hidden" id="series" role="tabpanel" aria-labelledby="series-tab">
                <!-- All cards -->
                <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                    @foreach ($recommended as $item)
                        <!-- recommended seres-->
                        @if ($item->type_id == 2)
                            @include('media.components.card')
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Latest Movies -->
        <section class="mt-14 ">
            <!-- heading -->
            <div class="flex items-center justify-between text-bold">
                <h2 class="text-white font-bold text-3xl">Latest Movies
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <a href="{{ route('movies.index') }}" class="text-white hover:text-color-links font-bold duration-500">
                    View all <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
            <!-- All cards -->
            <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                <!-- card -->
                @foreach ($latest as $item)
                    @if ($item->type_id == 1)
                        <!--latest movies-->
                        @include('media.components.card')
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Latest Tv-shows -->
        <section class="mt-14">
            <!-- heading -->
            <div class="flex items-center justify-between text-bold">
                <h2 class="text-white font-bold text-3xl">Latest TV-Series
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <a href="{{ route('series.index') }}" class="text-white hover:text-color-links font-bold duration-500">
                    View all <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
            <!-- All cards -->
            <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                <!-- card -->
                @foreach ($latest as $item)
                    @if ($item->type_id == 2)
                        <!--latest series-->
                        @include('media.components.card')
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
