@extends('layouts.media.master')

@section('title')
    Country
@endsection

@section('content')
    <!-- Main Movies & Series -->
    <div class="w-container m-auto">
        <!-- Latest Movies -->
        <section class="mt-14">
            <!-- heading -->
            <div class="text-bold flex flex-col gap-5 md:flex-row md:gap-0 md:justify-between md:items-center">
                <h2 class="text-white font-bold text-3xl">{{ $name }} Movies, TV-Series
                    <hr class="w-32 mt-2 border-2 border-color-three">
                </h2>
                <div>
                    <button data-collapse-toggle="filters" class="text-sm font-medium mr-2 px-2.5 py-0.5 dark:bg-color-secondary dark:text-white">Filter <i class="fa-solid fa-filter text-[13px]"></i></button>
                </div>
            </div>

            <!-- filter -->
            @include('media.components.filter')

            <!-- All cards -->
            <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                <!-- card -->
                @foreach ($country_this as $item)
                    @if ($item->countries != null)
                        <!-- card -->
                        <div class="cursor-pointer" data-popover-target="popover-media" data-popover-placement="right">
                            <!-- content Card -->
                            <a href="{{ $item->type_id == 1 ? route('play-movie.show', $item->slug) : route('play-serie.show', [$item->slug, 1, 1]) }}">
                                <div class="relative">
                                    <img src="{{ asset($item->picture) }}" alt="random imgee" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                                    <span class="bg-color-secondary text-white text-xs font-bold mr-2 px-2.5 py-0.5 absolute top-0 right-0 my-4 uppercase">{{ $item->qualitie->name }}</span>
                                    <a href="" class="absolute text-white left-3 top-3 text-2xl hover:text-red-500 duration-500"><i class="fa-solid fa-heart"></i></a>
                                </div>
                                <div class="my-2">
                                    <p class="text-lg font-bold text-white">{{ $item->name }}</p>
                                    <div class="flex justify-between items-center text-gray-500">
                                        <!-- date & min -->
                                        <div class="flex">
                                            <p>{{ date('Y', strtotime($item->released_year)) }}</p>
                                            <span class="font-extrabold mx-2"> . </span>
                                            <p>{{ $item->duration }} min</p>
                                        </div>
                                        <!-- movie or tv -->
                                        <span class="bg-gray-700 text-gray-300 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full uppercase">{{ $item->types->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <!-- popover Card
                                                                                                                    <div data-popover id="popover-media" role="tooltip"
                                                                                                                        class="absolute z-10 invisible inline-block w-64 text-sm font-light text-white transition-opacity duration-300 bg-color-primary border rounded-lg shadow-sm opacity-0">
                                                                                                                        <div class="px-3 py-2">
                                                                                                                            <p>And here's some amazing content. It's very engaging. Right?</p>
                                                                                                                        </div>
                                                                                                                        <div data-popper-arrow></div>
                                                                                                                    </div> -->
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
