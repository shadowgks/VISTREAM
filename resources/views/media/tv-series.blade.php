@extends('layouts.media.master')

@section('title')
    Tv-series
@endsection

@section('link_series_active')
    text-white
@endsection

@section('content')
    <!-- Main Series -->
    <div class="w-container m-auto">
        <section class="mt-14">
            <!-- heading -->
            <div class="text-bold flex flex-col gap-5 md:flex-row md:gap-0 md:justify-between md:items-center">
                <h2 class="text-white font-bold text-3xl">TV-Series
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
                @foreach ($series as $item)
                    <!-- card -->
                    @include('media.components.card')
                @endforeach
            </div>
        </section>


        <!-- pagination -->
        <nav class="flex justify-center mt-10" aria-label="Page navigation example">
            {{ $series->links('pagination::tailwind') }}
        </nav>
    </div>
@endsection
