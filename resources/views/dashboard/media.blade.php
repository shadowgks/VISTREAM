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
                                    <th>Country</th>
                                    <th>Released</th>
                                    <th>Description</th>
                                    <th>Click</th>
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
                                        <td>{{ $item->country_id }}</td>
                                        <td>{{ $item->released_year }}</td>
                                        <td>
                                            <p title="{{ $item->description }}">Description</p>
                                        </td>
                                        <td>{{ $item->click }}</td>
                                        {{-- {{dd($item->genres)}} --}}
                                        <td class="text-center">
                                            <button type="button" @click="open = !open"
                                                onclick="modalMediaEdit('{{ $item->id }}','{{ $item->name }}','{{ $item->duration }}','{{ $item->link_media }}'
                                            ,'{{ $item->link_imdb }}','{{ $item->description }}','{{ $item->released_year }}','{{ $item->director }}'
                                            ,'{{ $item->production }}','{{ $item->trailer }}','{{ $item->status }}','{{ $item->genres[0]->id }}','{{ $item->actors }}','{{ $item->country_id }}','{{ $item->quality_id }}','{{ $item->type_id }}')"
                                                class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                                </svg>
                                            </button>
                                            <button type="button" @click="open2 = !open2" onclick="modalMediaTrash('{{ $item->id }}')" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <a href="#" class="inline-block  hover:text-color-secondary" title="Voir">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.5868 13.7788C5.36623 15.5478 8.46953 17.9999 12.0002 17.9999C15.5308 17.9999 18.6335 15.5478 20.413 13.7788C20.8823 13.3123 21.1177 13.0782 21.2671 12.6201C21.3738 12.2933 21.3738 11.7067 21.2671 11.3799C21.1177 10.9218 20.8823 10.6877 20.413 10.2211C18.6335 8.45208 15.5308 6 12.0002 6C8.46953 6 5.36623 8.45208 3.5868 10.2211C3.11714 10.688 2.88229 10.9216 2.7328 11.3799C2.62618 11.7067 2.62618 12.2933 2.7328 12.6201C2.88229 13.0784 3.11714 13.3119 3.5868 13.7788Z"
                                                        stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12Z" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
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
                                            <select name="genres[]" id="genres" multiple>
                                                @foreach ($genre as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <p class="mb-2">Actors</p>
                                            <select name="actors[]" id="actors" multiple="multiple">
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
