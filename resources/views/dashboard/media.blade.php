@extends('layouts.dashboard.master')

@section('title')
    Media
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
                    <div class="bg-white p-8 dark:bg-color-primary-75 h-screen">
                        <div class="text-right">
                            <button @click="open = true" type="button" onclick="addMedia()"
                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-color-secondary border border-color-secondary hover:text-white hover:bg-color-three hover:ring-0 hover:border-color-three focus:bg-color-secondary focus:border-color-secondary focus:outline-none focus:ring-0"><i
                                    class="fa-solid fa-plus fa-lg"></i></button>
                        </div>
                        <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Quality</th>
                                    <th>Duration</th>
                                    <th>Director</th>
                                    <th>Country</th>
                                    <th>Released</th>
                                    <th>Production</th>
                                    <th>Description</th>
                                    <th>Total Click</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($media as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <a href="{{ $item->link_media }}">
                                            <td>
                                                <img class="object-cover inline-block rounded-full shadow-xl w-12 h-12 max-w-full bg-gray-300 border-gray-200 dark:bg-gray-800 border-2 dark:border-gray-600" src="{{ URL::asset($item->picture) }}" alt="Image Description">
                                                {{ $item->name }}
                                            </td>
                                        </a>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->quality_id }}</td>
                                        <td>{{ $item->duration }}</td>
                                        <td>{{ $item->director }}</td>
                                        <td>{{ $item->country_id }}</td>
                                        <td>{{ $item->released_year }}</td>
                                        <td>{{ $item->production }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->click }}</td>
                                        <td>
                                            <button type="button" @click="open = !open" onclick="modalMediaEdit('{{ $item->id }}','{{ $item->fullname }}','{{ $item->date_birthday }}','{{ $item->imdb_path }}')"
                                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></button>
                                            <button type="button" @click="open2 = !open2" onclick="modalMediaTrash('{{ $item->id }}')"
                                                class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-600 hover:ring-0 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:outline-none focus:ring-0"
                                                @><i class="fa-regular fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- Modal add -->
                    <div x-show="open" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                        <div @click.away="open = false" class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                <button @click="open = false" class="fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                <!-- modal title -->
                                <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Media</div>
                                {{-- actions --}}
                                <input type="hidden" id="route_store_media" value="{{ route('media.store') }}">
                                <input type="hidden" id="route_update_media" value="{{ route('media.update', '') }}">
                                <form method="POST" action="{{ route('media.store') }}" enctype="multipart/form-data" name="form_media">
                                    @csrf
                                    <div id="methode_put_media">
                                        {{-- here add methode put in js --}}
                                    </div>
                                    <!-- modal content -->
                                    <div class="flex flex-wrap flex-row m-6">
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Name</label>
                                            <input type="text" name="name"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Link Media</label>
                                            <input type="text" name="link_media"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Released</label>
                                            <input type="date" name="released_year"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Picture</label>
                                            <input type="file" name="picture"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label>Link Imdb (optional)</label>
                                            <input type="text" name="link_imdb"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label>Trailer (optional)</label>
                                            <input type="text" name="trailer"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Director (optional)</label>
                                            <input type="text" name="director"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                            <label class="inline-block mb-2">Production (optional)</label>
                                            <input type="text" name="production"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <p class="mb-2">Genres</p>
                                            <select class="js-example-basic-multiple" name="genres[]" multiple="multiple">
                                                @foreach ($genre as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <p class="mb-2">Actors</p>
                                            <select class="js-example-basic-multiple" name="actors[]" multiple="multiple">
                                                @foreach ($actor as $item)
                                                    <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                            <label class="inline-block mb-2">Quality</label>
                                            <select name="quality_id"
                                                class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                <option selected>Choose...</option>
                                                @foreach ($quality as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                            <label class="inline-block mb-2">Country</label>
                                            <select name="country_id"
                                                class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                <option selected>Choose...</option>
                                                @foreach ($country as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                            <label class="inline-block mb-2">Duration</label>
                                            <input type="number" name="duration" min="0"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600">
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                            <label class="inline-block mb-2">Type</label>
                                            <select name="type_id"
                                                class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                <option selected>Choose...</option>
                                                @foreach ($type as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6">
                                            <label class="inline-block mb-2">Status</label>
                                            <select name="status" name="status"
                                                class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                                <option selected>Choose...</option>
                                                <option value="0">Active</option>
                                                <option value="1">Disable</option>
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <label class="inline-block mb-2">Description</label>
                                            <textarea cols="30" rows="4" name="description"
                                                class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                placeholder="Description"></textarea>
                                        </div>
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
                                    <p>Are you sure you went deleted this media!</p>
                                </div>
                                {{-- methode --}}
                                <input type="hidden" id="route_destroy_media" value="{{ route('media.destroy', '') }}">
                                <form action="{{ route('media.destroy', '') }}" method="POST" name="form2_media">
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
