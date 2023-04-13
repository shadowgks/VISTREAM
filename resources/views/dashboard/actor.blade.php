@extends('layouts.dashboard.master')

@section('title')
    Actor
@endsection

@section('actor-active')
    dark:text-gray-300
@endsection

@section('content')
    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2">
            <!-- row title -->
            @include('dashboard.components.title')

            {{-- B Sessions Generate Message --}}
            @include('dashboard.components.session')
            {{-- E Sessions Generate Message --}}

            {{-- Modal add --}}
            <div x-data='{ open2: false }'>
                <div x-data='{ open: false }'>
                    {{-- dataTable --}}
                    <div class="bg-white p-8 dark:bg-color-primary-75 h-fit">
                        <div class="text-right">
                            <button @click="open = true" type="button" onclick="addActor()"
                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-color-secondary border border-color-secondary hover:text-white hover:bg-color-three hover:ring-0 hover:border-color-three focus:bg-color-secondary focus:border-color-secondary focus:outline-none focus:ring-0"><i
                                    class="fa-solid fa-plus fa-lg"></i></button>
                        </div>
                        <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Date Birtdhay</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($actor as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a href="{{ $item->imdb_path }}">
                                                <img class="object-cover inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 border-gray-200 dark:bg-gray-800 border-2 dark:border-gray-600" src="{{ URL::asset($item->picture) }}" alt="Image Description">
                                            </a>
                                            {{ $item->fullname }}
                                        </td>
                                        <td>{{ $item->date_birthday }}</td>
                                        <td>
                                            <button type="button" @click="open = !open" onclick="modalActorEdit('{{ $item->id }}','{{ $item->fullname }}','{{ $item->date_birthday }}','{{ $item->imdb_path }}')" class="inline-block mr-2 hover:text-green-500" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                                </svg>
                                            </button>
                                            <button type="button" @click="open2 = !open2" onclick="modalActorTrash('{{ $item->id }}')" class="inline-block mr-2  hover:text-red-500" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- Modal add -->
                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Actor</div>
                                {{-- actions --}}
                                <input type="hidden" id="route_store_actor" value="{{ route('actor.store') }}">
                                <input type="hidden" id="route_update_actor" value="{{ route('actor.update', '') }}">
                                <form method="POST" action="{{ route('actor.store') }}" enctype="multipart/form-data" data-parsley-validate name="form_actor">
                                    @csrf
                                    <div id="methode_put_actor">
                                        {{-- here add methode put in js --}}
                                    </div>
                                    <!-- modal content -->
                                    <div class="my-6 mx-7">
                                        <label for="exampleInput1" class="inline-block mb-2">Full Name</label>
                                        <input type="text" name="fullname" data-parsley-trigger="keyup" data-parsley-length="[2, 255]" required
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="exampleInput1" placeholder="Full Name">
                                    </div>
                                    <div class="mb-6 mx-7">
                                        <label for="exampleInput1" class="inline-block mb-2">Imdb Actor (Optional)</label>
                                        <input type="url" name="imdb_path" data-parsley-trigger="keyup" minlength="2"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="exampleInput1" placeholder="Link Here">
                                    </div>
                                    <div class="mb-6 mx-7">
                                        <label for="exampleInput1" class="inline-block mb-2">Date Birthday</label>
                                        <input type="text" name="date_birthday" id="date_flatpickr_actor" placeholder="Select a date..." data-parsley-trigger="change" required
                                            class="date_flatpickr w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                    </div>
                                    <div class="mb-6 mx-7">
                                        <label for="formFileMultiple" class="inline-block mb-2">Picture (Optional)</label>
                                        <input name="picture" data-parsley-trigger="change" accept=".jpg,.jpeg,.png,.svg,.gif"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            type="file" id="formFileMultiple" multiple>
                                    </div>
                                    <!-- modal footer -->
                                    <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                        <button @click="open = false" type="button" name="close"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                        <button type="submit" name="save"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Saves
                                            Changes</Button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                        </div>
                    </div>

                    {{-- Modal delete --}}
                    <div x-show="open2" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div @click.away="open2 = false" class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open2" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <button @click="open2 = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Delete
                                </div>
                                <!-- modal content -->
                                <div class="p-6 flex-grow text-center text-2xl">
                                    <p>Are you sure you went deleted this actor!</p>
                                </div>
                                {{-- methode --}}
                                <input type="hidden" id="route_destroy_actor" value="{{ route('actor.destroy', '') }}">
                                <form action="{{ route('actor.destroy', '') }}" method="POST" name="form2_actor">
                                    <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                        @csrf
                                        @method('DELETE')
                                        <button @click="open2 = false" type="button"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                        <button type="submit"
                                            class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-red-600 border border-red-600 hover:text-white hover:bg-red-700 hover:ring-0 hover:border-red-700 focus:bg-red-700 focus:border-red-700 focus:outline-none focus:ring-0">Delete
                                            Now</Button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                        </div>
                    </div>

                </div>
            </div>

    </main>
@endsection
