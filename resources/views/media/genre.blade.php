@extends('layouts.media.master')

@section('title')
    Genre
@endsection

@section('link_genres_active')
    text-white
@endsection
@section('content')
    <!-- Main Movies & Series -->
    <div class="w-container m-auto">
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
            @include('media.components.filter_component')

            <!-- All cards -->
            <div class="items-media grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 mt-10 my-4">
                @foreach ($genre_this as $item)
                    @if (count($item->genres) != 0)
                        <!-- card -->
                        @include('media.components.card')
                    @endif
                @endforeach
            </div>
        </section>

        <!-- pagination -->
        <nav class="flex justify-center mt-10" aria-label="Page navigation example">
            {{ $genre_this->links('pagination::tailwind') }}
        </nav>
    </div>
@endsection
