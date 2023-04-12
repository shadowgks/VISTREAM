<!-- main -->
<div class="my-8 lg:flex lg:gap-5">
    <!-- info_media -->
    <div class="lg:w-[75%] bg-color-primary-75 lg:grid grid-cols-4 rounded-sm">
        <!-- picture -->
        <div class="mb-3 md:mb-0 w-full">
            <img src="{{ asset($media_play->picture) }}" alt="{{ $media_play->name }}" class="img-media w-full object-cover object-center rounded-lg shadow-md hover:saturate-50 hover:scale-105 hover:duration-500 duration-300">
        </div>
        <!-- info -->
        <div class="py-2 px-4 md:p-8 col-span-3">
            <!-- heading -->
            <div class="md:flex md:justify-between">
                <!-- title -->
                <p class="text-white text-2xl font-bold">{{ $media_play->name }}</p>
                {{-- <!-- rating -->
                        <div class="flex items-center cursor-pointer">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-300 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div> --}}
            </div>
            <!-- heading-mini -->
            <div class="flex gap-6 my-2">
                <span class="bg-color-secondary text-white text-xs md:font-medium px-2.5 py-0.5 md:rounded-full uppercase">{{ $media_play->qualitie->name }}</span>
                <a href="{{ $media_play->link_imdb }}">
                    <p class="text-yellow-400 text-sm font-bold"><i class="fa-solid fa-star"></i> IMDB</p>
                </a>
                <p class="text-gray-400 text-sm font-bold">{{ $media_play->duration }} min</p>
            </div>
            <!-- description -->
            <div class="my-2">
                <p class="text-gray-400 text-sm">{{ $media_play->description }}.</p>
            </div>
            <!-- content info -->
            <div class="mb-6 flex gap-5">
                <div>
                    <p class="text-gray-500 text-sm ">Country : </p>
                    <p class="text-gray-500 text-sm ">Genre : </p>
                    <p class="text-gray-500 text-sm ">Release : </p>
                    <p class="text-gray-500 text-sm ">Director : </p>
                    <p class="text-gray-500 text-sm ">Production: </p>
                    <p class="text-gray-500 text-sm">Cast : </p>
                </div>
                <div>
                    <a href="{{ route('media.country.show', $media_play->countries->name) }}" class="text-gray-400 text-sm [80%] hover:text-color-links">{{ $media_play->countries->name }}</a>
                    <div>
                        @foreach ($media_play->genres as $genre)
                            <a href="{{ route('media.genre.show', $genre->name) }}" class="text-gray-400 text-sm hover:text-color-links">{{ $genre->name }},</a>
                        @endforeach
                    </div>
                    {{-- {{dd(isEmpty($media_play->released_year))}} --}}
                    <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->released_year }}</p>
                    <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->director == '' ? 'NULL' : $media_play->director }}</p>
                    <p class="text-gray-400 text-sm hover:text-color-links">{{ $media_play->production == '' ? 'NULL' : $media_play->production }}</p>
                    <div>
                        @foreach ($media_play->actors as $actor)
                            <a href="{{ route('actor.profile', $actor->fullname) }}" class="text-gray-400 text-sm hover:text-color-links">{{ $actor->fullname }},</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- footer trailer -->
            <div>
                <label href="{{ $media_play->trailer }}" for="my-modal-4" id="btn-modal-trailer" class="btn modal-trailer">
                    Trailer
                </label>
            </div>
        </div>
    </div>

    <!-- The button to open modal -->
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
        <label class="modal-box relative" id="modal-trailer" for="">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </label>
    </label>

    <!-- You may also like -->
    @include('media.components.you_may_also_like')
</div>
