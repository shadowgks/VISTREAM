@extends('layouts.dashboard.master')

@section('title')
    User
@endsection

@section('user-active')
    dark:text-gray-300
@endsection

@section('content')
    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row title -->
            @include('dashboard.components.title')

            {{-- Modal add --}}
            <div x-data='{ open2: false }'>
                <div x-data='{ open: false }'>
                    {{-- dataTable --}}
                    <div class="bg-white p-8 dark:bg-color-primary-75 h-fit">
                        <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a href="#">
                                                <img class="object-cover inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 border-gray-200 dark:bg-gray-800 border-2 dark:border-gray-600" src="{{ URL::asset($item->profile_photo_path) }}" alt="Image Description">
                                            </a>
                                            {{ $item->name }}
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>Action</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
@endsection
