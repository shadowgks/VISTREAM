<div id="filters" class="w-full my-10 shadow p-5 rounded-lg bg-color-primary-75 hidden">
    <!-- heading filter -->
    {{-- {{ dd($global_data['type-media']) }} --}}
    <form method="GET" action="{{route('filter.media')}}">
        <div>
            <div class="flex items-start border-b-2 border-gray-700 py-4">
                <label class="font-bold text-white mr-4">
                    Type:
                </label>
                <div class="text-white">
                    <input class="mx-1 bg-gray-600" type="radio" name="type" value="all" id="" checked><label for="">All</label>
                    @foreach ($global_data['type-media'] as $item)
                        <input class="mx-1 bg-gray-600" type="radio" name="type" value="{{ $item->id }}" id=""><label for="">{{ $item->id == 1 ? 'Movies' : 'Series' }}</label>
                    @endforeach
                </div>
            </div>
            <div class="flex items-start border-b-2 border-gray-700 py-4">
                <label class="font-bold text-white mr-4">
                    Quality:
                </label>
                <div class="text-white">
                    <input class="mx-1 bg-gray-600" type="radio" name="quality" value="all" id="" checked><label for="">All</label>
                    @foreach ($global_data['quality'] as $item)
                        <input class="mx-1 bg-gray-600" type="radio" name="quality" value="{{ $item->id }}" id="">
                        <label for="">{{ $item->name }}</label>
                    @endforeach
                </div>
            </div>
            <div class="flex items-start border-b-2 border-gray-700 py-4">
                <label class="font-bold text-white mr-4">
                    Released:
                </label>
                <div class="text-white">
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="all" id="" checked><label for="">All</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="2023" id=""><label for="">2023</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="2022" id=""><label for="">2022</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="2021" id=""><label for="">2021</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="2020" id=""><label for="">2020</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="2019" id=""><label for="">2019</label>
                    <input class="mx-1 bg-gray-600" type="radio" name="year" value="older-2019" id=""><label for="">Older</label>
                </div>
            </div>
            <div class="flex items-center border-b-2 border-gray-700 py-4">
                <label class="font-bold text-white mr-4">
                    Genre:
                </label>
                <div class="text-white">
                    @foreach ($global_data['genres'] as $item)
                        <input class="mx-1 bg-gray-600" type="checkbox" name="genres[]" value="{{ $item->id }}" id=""><label for="">{{ $item->name }}</label>
                    @endforeach
                </div>
            </div>
            <div class="flex items-center mb-4 py-4">
                <label class="font-bold text-white mr-4">
                    Country:
                </label>
                <div class="text-white items-center">
                    @foreach ($global_data['countries'] as $item)
                        <input class="mx-1 bg-gray-600" type="checkbox" name="countries[]" value="{{ $item->id }}" id=""><label for="">{{ $item->name }}</label>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- all filter -->


        <!-- submit filter -->
        <div class="mt-4 text-end">
            <button class="px-4 py-2 bg-red-600 text-white hover:bg-gray-200 hover:text-gray-900 text-sm font-medium rounded-md">
                Reset
            </button>
            <button class="px-4 py-2 bg-color-secondary text-white hover:bg-gray-200 hover:text-gray-900 text-sm font-medium rounded-md">
                Submit
            </button>
    </form>
</div>
</div>










{{-- <div class="flex items-center justify-center p-4">
    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
        class="font-medium rounded-full text-sm px-4 py-2.5 text-center inline-flex items-center text-white bg-color-secondary hover:bg-primary-700 focus:ring-primary-800"
        type="button">
        Type
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden w-56 p-3rounded-lg shadowbg-gray-700">
        <h6 class="mb-3 text-sm font-medium text-white">
            Category
        </h6>
        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
            <li class="flex items-center">
                <input id="apple" type="checkbox" value="" class="w-4 h-4 rounded focus:ring-primary-600 ring-offset-gray-700 focus:ring-2 bg-gray-600 border-gray-500" />

                <label for="apple" class="ml-2 text-sm font-medium text-gray-100">
                    Apple
                </label>
            </li>

        </ul>
    </div>
</div> --}}
