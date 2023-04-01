@extends('layouts.dashboard.master')

@section('title')
    Country
@endsection

@section('country-active')
    dark:text-gray-300
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

            {{-- Modal add --}}
            <div x-data='{ open2: false }'>
                <div x-data='{ open: false }'>
                    {{-- dataTable --}}
                    <div class="bg-white p-8 dark:bg-color-primary-75 h-fit">
                        <div class="text-right">
                            <button @click="open = true" type="button" onclick="addCountry()"
                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-color-secondary border border-color-secondary hover:text-white hover:bg-color-three hover:ring-0 hover:border-color-three focus:bg-color-secondary focus:border-color-secondary focus:outline-none focus:ring-0"><i
                                    class="fa-solid fa-plus fa-lg"></i></button>
                        </div>
                        <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                    <th>#</th>
                                    <th>name</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($country as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <button type="button" @click="open = !open" onclick="modalCountryEdit('{{ $item->id }}','{{ $item->name }}')"
                                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></button>
                                            <button type="button" @click="open2 = !open2" onclick="modalCountryTrash('{{ $item->id }}')"
                                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"
                                                @><i class="fa-regular fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- Modal add -->
                    <div id="modal_add_country" x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Country</div>
                                {{-- actions --}}
                                <input type="hidden" id="route_store_country" value="{{ route('country.store') }}">
                                <input type="hidden" id="route_update_country" value="{{ route('country.update', '') }}">
                                <form method="POST" action="{{ route('country.store') }}" name="form_country">
                                    @csrf
                                    <div id="methode_put_country">
                                        {{-- here add methode put in js --}}
                                    </div>
                                    <!-- modal content -->
                                    <div class="my-6 mx-7">
                                        <label for="exampleInput1" class="inline-block mb-2">Name</label>
                                        <input type="text" name="name"
                                            class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="exampleInput1" placeholder="Name" required>
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
                    </div>

                    {{-- Modal delete --}}
                    <div id="modal_delete_country" x-show="open2" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div @click.away="open2 = false" class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open2" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <button @click="open2 = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Delete
                                </div>
                                <!-- modal content -->
                                <div class="p-6 flex-grow text-center text-2xl">
                                    <p>Are you sure you went deleted this country!</p>
                                </div>
                                {{-- methode --}}
                                <input type="hidden" id="route_destroy_country" value="{{ route('country.destroy', '') }}">
                                <form action="{{ route('country.store') }}" method="POST" name="form2_country">
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
        </div>
    </main>
@endsection
