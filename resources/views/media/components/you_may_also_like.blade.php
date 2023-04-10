<!-- You may also like -->
<div class="lg:w-[35%] bg-color-primary-75 rounded-sm p-4">
    <!-- headign -->
    <h2 class="text-white font-bold text-2xl">You may also like
        <hr class="w-32 mt-2 border-2 border-color-three">
    </h2>
    <!-- All cards -->
    <div class="items-media grid grid-cols-2 gap-3 mt-10 my-4">
        <!-- content Card -->
        @foreach ($this_media_like as $item)
            <div>
                <a href="{{ $item->type_id == 1 ? route('play-movie.show', $item->slug) : route('play-serie.show', [$item->slug, 1, 1]) }}">
                    <div class="relative">
                        <img src="{{ asset($item->picture) }}" alt=" random imgee" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
                        <span class="bg-color-secondary text-white text-xs font-bold mr-2 px-2.5 py-0.5 absolute top-0 right-0 my-4 uppercase">bluray</span>
                        <a href="" class="absolute text-white left-3 top-3 text-2xl hover:text-red-500 duration-500"><i class="fa-solid fa-heart"></i></a>
                    </div>
                </a>
                <div class="my-2">
                    <p class="text-lg font-bold text-white">{{ $item->name }}</p>
                    <div class="flex justify-between items-center text-gray-500">
                        <!-- date & min -->
                        <div class="flex">
                            <p>{{ date('Y', strtotime($item->released_year)) }}</p>
                            <span class="font-extrabold mx-2"> . </span>
                            <p>{{ $item->duration }} min</p>
                        </div>
                        <!-- movie or tv-->
                        <span class="bg-gray-700 text-gray-300 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Movie</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
