<div class="cursor-pointer" data-popover-target="popover-media" data-popover-placement="right">
    <!-- content Card -->
    <a href="{{ $item->type_id == 1 ? route('play-movie.show', $item->slug) : route('play-serie.show', [$item->slug, 1, 1]) }}">
        <div class="relative">
            <img src="{{ asset($item->picture) }}" alt="random imgee" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
            <span class="bg-color-secondary text-white text-xs font-bold mr-2 px-2.5 py-0.5 absolute top-0 right-0 my-4 uppercase">{{ $item->qualitie->name }}</span>
            @if (!Auth::user())
                <a href="{{ route('login') }}" class="absolute text-white left-3 top-3 text-2xl hover:text-color-secondary duration-500"><i class="fa-solid fa-heart"></i></a>
            @else
                <form action="#" class="form_btn_watchlist" id="form_heart">
                    @csrf
                        @if ($item->users->count() == 0)
                            <a id="heart-{{$item->id}}" data-route="{{ route('add.watchlist', $item->slug) }}" data-media="{{ $item->slug }}" class="btn_watchlist absolute text-white left-3 top-3 text-2xl hover:text-color-secondary duration-500">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        @else
                            <a data-route="{{ route('add.watchlist', $item->slug) }}" data-media="{{ $item->slug }}" class="btn_watchlist absolute left-3 top-3 text-2xl text-red-500 duration-500">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        @endif
                </form>
            @endif

        </div>
        <div class="my-2">
            <p class="text-lg font-bold text-white">{{ $item->name }}</p>
            <div class="flex justify-between items-center text-gray-500">
                <!-- date & min -->
                <div class="flex">
                    <p>{{ date('Y', strtotime($item->released_year)) }}</p>
                    <span class="font-extrabold mx-2"> . </span>
                    <p>{{ $item->duration }} min</p>
                </div>
                <!-- movie or tv -->
                <span class="bg-gray-700 text-gray-300 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full uppercase">{{ $item->types->name }}</span>
            </div>
        </div>
    </a>
    <!-- popover Card
                                                                                            <div data-popover id="popover-media" role="tooltip"
                                                                                                class="absolute z-10 invisible inline-block w-64 text-sm font-light text-white transition-opacity duration-300 bg-color-primary border rounded-lg shadow-sm opacity-0">
                                                                                                <div class="px-3 py-2">
                                                                                                    <p>And here's some amazing content. It's very engaging. Right?</p>
                                                                                                </div>
                                                                                                <div data-popper-arrow></div>
                                                                                            </div> -->
</div>
