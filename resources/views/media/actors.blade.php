@extends('layouts.media.master')

@section('title')
    Actors
@endsection

@section('link_actors_active')
    text-white
@endsection
@section('content')
    <!-- actors -->
    <section class="bg-color-primary-75 mt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-white">Actors
                    <hr class="w-32 mt-2 border-2 border-color-three mx-auto">
                </h2>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                @foreach ($actors as $item)
                    <div class="text-center text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 object-cover rounded-full" src="{{ asset($item->picture) }}" alt="Bonnie Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-white">
                            <a href="{{route('actor.profile',$item->fullname)}}">{{ $item->fullname }}</a>
                        </h3>
                        <p>{{ $item->date_birthday }}</p>
                        <ul class="flex justify-center space-x-4">
                            <li>
                                <a href="{{ $item->imdb_path }}" class="text-[#39569c] hover:text-white">
                                    <img class="h-11 w-11" src="{{ asset('build\assets\images\svg\icons\imdb-svgrepo-com.svg') }}" alt="imdb">
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <!-- pagination -->
            <nav class="flex justify-center mt-16" aria-label="Page navigation example">
                {{ $actors->links('pagination::tailwind') }}
            </nav>
        </div>
    </section>
@endsection
