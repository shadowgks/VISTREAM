@extends('layouts.dashboard.master')

@section('title')
    Actor
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
                <div class="bg-white p-8 border dark:bg-color-primary-75 dark:border-gray-800">
                    <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      <thead>
                        <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40">
                          <th>Title</th>
                          <th>Author</th>
                          <th>Views</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Intro to CSS</td>
                          <td>Adam</td>
                          <td>858</td>
                        </tr>
                        <tr>
                          <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                          <td>Adam</td>
                          <td>112</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                        <tr>
                          <td>Intro to JavaScript</td>
                          <td>Chris</td>
                          <td>1,280</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <tr>
                @foreach ($actor as $item)
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->date_birthday}}</td>
                @endforeach
                </tr>
            </div>
        </div>
    </main>
@endsection