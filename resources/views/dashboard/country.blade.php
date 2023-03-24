@extends('layouts.dashboard.master')

@section('title')
    Country
@endsection

@section('content')
    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row title -->
            <div class="flex flex-wrap flex-row">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <p class="text-xl font-bold mt-3 mb-5">@yield('title')</p>
                </div>
            </div>

            <div>
                <tr>
                @foreach ($country as $item)
                    <td>{{$item->name}}</td>
                @endforeach
                </tr>
            </div>
        </div>
    </main>
@endsection