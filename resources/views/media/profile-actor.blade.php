@extends('layouts.media.master')

@section('title')
    Profile Actor
@endsection

@section('content')
    <!-- actor -->
    <div class="pt-20">
        <!-- Card start -->
        <div>
            <div class="max-w-sm mx-auto bg-color-primary-75 rounded-lg overflow-hidden shadow-lg">
                <div class="px-4 pb-6">
                    <div class="text-center my-4">
                        <img class="h-32 w-32 object-cover rounded-full border-4 border-white mx-auto my-4" src="{{ asset($actor_media->picture) }}" alt="">
                        <div class="py-2">
                            <h3 class="font-bold text-white text-2xl mb-1">{{ $actor_media->fullname }}</h3>
                            <div class="inline-flex text-gray-400 items-center">
                                <svg class="h-5 w-5 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7" stroke="#626874" stroke-width="2" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                                {{ $actor_media->date_birthday }}
                            </div>
                            <ul class="flex justify-center space-x-4">
                                <li>
                                    <a href="{{ $actor_media->imdb_path }}" class="text-[#39569c] hover:text-white">
                                        <img class="h-11 w-11" src="{{ asset('build\assets\images\svg\icons\imdb-svgrepo-com.svg') }}" alt="imdb">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card end -->
    </div>
    <!-- All cards -->
    <div class="mx-4 mt-10">
        <h2 class="text-white font-bold text-3xl uppercase">My media
            <hr class="w-32 mt-2 border-2 border-color-three">
        </h2>
        <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-7 mb-40 ">
            @foreach ($actor_media->medias as $item)
                <!-- card -->
                @include('media.components.card')
            @endforeach
        </div>
    </div>
@endsection
