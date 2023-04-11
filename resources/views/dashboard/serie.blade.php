@extends('layouts.dashboard.master')

@section('title')
    Series
@endsection

@section('serie-color')
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
            <div x-data='{ open3: false }'>
                <div x-data='{ open2: false }'>
                    <div x-data='{ open: false }'>
                        {{-- dataTable --}}
                        <div class="bg-white p-8 dark:bg-color-primary-75 h-fit">
                            <div class="text-right">
                                <button @click="open = true" type="button" onclick="addserie()"
                                    class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-color-secondary border border-color-secondary hover:text-white hover:bg-color-three hover:ring-0 hover:border-color-three focus:bg-color-secondary focus:border-color-secondary focus:outline-none focus:ring-0"><i
                                        class="fa-solid fa-plus fa-lg"></i></button>
                            </div>
                            <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead>
                                    <tr class="bg-gray-200 dark:bg-gray-700 dark:bg-opacity-40 uppercase">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Seasons</th>
                                        <th>Episodes</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_table as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                {{ $item->media->name }}
                                            </td>
                                            <td>{{ $item->num_season }}</td>
                                            <td>
                                                <li x-data="{ open: false }" class="relative flex">
                                                    <button href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
                                                        <div class="relative inline-block">
                                                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M12 7H19C20.1046 7 21 7.89543 21 9V17C21 18.1046 20.1046 19 19 19H5C3.89543 19 3 18.1046 3 17V9C3 7.89543 3.89543 7 5 7H12ZM12 7L8 3M12 7L16 3" stroke="#737a85" stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"></path>
                                                                </g>
                                                            </svg>
                                                            <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">{{ count($item->episodes) }}</span></span>
                                                        </div>
                                                    </button>

                                                    <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
                                                        x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
                                                        class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-color-primary-75 border dark:border-gray-700 shadow-md" style="display: none;">
                                                        <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                                                            <div class="relative">
                                                                <div class="font-bold">Episodes</div>
                                                            </div>
                                                        </div>
                                                        <div class="max-h-60 overflow-y-auto scrollbars show">
                                                            @php
                                                                $array_ep = [];
                                                                $array_url = [];
                                                                $array_ep_id = [];
                                                                foreach ($item->episodes as $key => $ep) {
                                                                    echo '
                                                                    <div class="flex flex-wrap flex-row items-center justify-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 py-2 hover:bg-gray-100 bg-gray-50">
                                                                        <div class="flex-shrink max-w-full px-2 w-3/4">
                                                                            <div class="text-sm font-bold">Episode ' .
                                                                        $ep->num_ep .
                                                                        '</div>
                                                                            <div class="text-gray-500 text-sm mt-1">'.$ep->url.'</div>
                                                                        </div>
                                                                    </div>
                                                                    ';
                                                                    $array_ep[] = $ep->num_ep;
                                                                    $array_url[] = $ep->url;
                                                                    $array_ep_id[] = $ep->id;
                                                                }
                                                                $convert_ep = implode(' ', $array_ep);
                                                                $convert_url = implode(' ', $array_url);
                                                                $convert_ep_id = implode(' ', $array_ep_id);
                                                            @endphp
                                                        </div>
                                                    </div>
                                                </li>
                                            </td>
                                            <td>
                                                <button type="button" @click="open3 = !open3" onclick='modalSerieEdit("{{ $item->id }}","{{ $item->media->name }}","{{ $item->num_season }}","{{ $convert_ep }}","{{ $convert_url }}","{{ $convert_ep_id }}")'
                                                    class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"><i
                                                        class="fa-sharp fa-solid fa-pen-to-square"></i></button>
                                                <button type="button" @click="open2 = !open2" onclick='modalSerieTrash("{{ $item->id }}")'
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
                            <div class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                    <button @click="open = false" class="close-serie-add fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                    <!-- modal title -->
                                    <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Series</div>
                                    {{-- actions --}}
                                    <input type="hidden" id="route_store_serie" value="{{ route('serie.store') }}">
                                    <input type="hidden" id="route_update_serie" value="{{ route('serie.update', '') }}">
                                    <form method="POST" action="{{ route('serie.store') }}" enctype="multipart/form-data" name="form_serie" data-parsley-validate>
                                        @csrf
                                        <div id="methode_put_serie">
                                            {{-- here add methode put in js --}}
                                        </div>

                                        <!-- modal content -->
                                        <div class="flex flex-wrap flex-row m-6">
                                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                <p for="exampleInput1" class="inline-block mb-2">Series</p>
                                                <select class="js-example-responsive" name="media_id" id="media_id" required>
                                                    <option selected disabled>Choose...</option>
                                                    @foreach ($media_series as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                <p for="exampleInput1" class="inline-block mb-2">Seasons</p>
                                                <select class="js-example-responsive" name="num_season" id="num_season" required>
                                                    <option selected disabled>Choose...</option>
                                                    @foreach ($num_season as $item)
                                                        <option value="{{ $item->id }}">{{ $item->number }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="m-6 px-4 flex justify-between items-center">
                                            <p>Episodes</p>
                                            <button onclick="startDuplacate()" class="bg-color-secondary text-white hover:bg-color-three hover:text-black px-3 py-1"><i class="fa-solid fa-plus"></i></button>
                                        </div>

                                        <div id="parent_div">
                                            <div class="border border-gray-300 mx-6 mb-2 py-3">
                                                <div class="m-3 px-4">
                                                    <label class="inline-block mb-2">Number</label>
                                                    <input type="number" name="num_ep[]" data-parsley-trigger="change" min="1" required
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="number-ep-1" value="1">
                                                </div>
                                                <div class="m-3 px-4">
                                                    <label class="inline-block mb-2">URL</label>
                                                    <input type="url" name="url[]" data-parsley-trigger="keyup" data-parsley-length="[2, 255]" required
                                                        class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        id="exampleInput1" placeholder="WWW">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div id="duplacate"></div> --}}
                                        <!-- modal footer -->
                                        <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                            <button @click="open = false" type="button" name="close"
                                                class="close-serie-add py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                            <button type="submit" name="save"
                                                class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add</Button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                            </div>
                        </div>

                        {{-- Modal update --}}
                        <div x-show="open3" tabindex="0" class="z-50 overflow-auto inset-0 w-full h-full fixed py-6">
                            <div class="z-50 relative p-3 mx-auto my-0 w-[40%]" style="min-width: 500px;display: none" x-show="open3" x-transition:enter="transition duration-500" x-transition:enter-start="transform opacity-0 -translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition -translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 -translate-y-4">
                                <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                    <button @click="open3 = false" class="close-serie-update fill-current h-6 w-6 absolute ltr:right-0 rtl:left-0 top-0 m-6 font-3xl font-bold">×</button>
                                    <!-- modal title -->
                                    <div class="px-6 py-3 text-xl border-b dark:border-gray-700 font-bold">Modal Series</div>
                                    <input type="hidden" id="route_update_serie" value="{{ route('serie.update', '') }}">
                                    <form method="POST" action="" enctype="multipart/form-data" name="form_serie_update" data-parsley-validate>
                                        @csrf
                                        @method('PATCH')

                                        <!-- modal content -->
                                        <div class="flex flex-wrap flex-row m-6">
                                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                <p for="exampleInput1" class="inline-block mb-2">Seasons: </p>
                                                <span class="text-white font-bold" id="span_season">NULL</span>
                                            </div>
                                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6">
                                                <p for="exampleInput1" class="inline-block mb-2">Series: </p>
                                                <span class="text-white font-bold" id="span_name">NULL</span>
                                            </div>
                                        </div>
                                        <div class="m-6 px-4 flex justify-between items-center">
                                            <p>Episodes</p>
                                            {{-- <button onclick="startDuplacate()" class="bg-color-secondary text-white hover:bg-color-three hover:text-black px-3 py-1"><i class="fa-solid fa-plus"></i></button> --}}
                                        </div>

                                        <div id="parent_div_update">
                                        </div>

                                        {{-- <div id="duplacate"></div> --}}
                                        <!-- modal footer -->
                                        <div class="px-6 py-3 border-t dark:border-gray-700 flex justify-end">
                                            <button @click="open3 = false" type="button" name="close"
                                                class="close-serie-update py-2 px-4 inline-block text-center rounded leading-5 text-gray-800 bg-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 ltr:mr-2 rtl:ml-2">Close</Button>
                                            <button type="submit" name="update"
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
                                        <p>Are you sure you went deleted this Season of Serie!</p>
                                    </div>
                                    {{-- methode --}}
                                    <input type="hidden" id="route_destroy_serie" value="{{ route('serie.destroy', '') }}">
                                    <form action="" method="POST" name="form_serie_delete">
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
