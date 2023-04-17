<input type="checkbox" id="my-modal-4" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <label class="modal-box relative" id="modal-trailer" for="">
        @php
            $url = $media_play->trailer;
            $value_url = substr(parse_url($url, PHP_URL_QUERY), 2); //PHP_URL_QUERY - after the question mark ?
        @endphp
        <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{ $value_url }}" allowfullscreen></iframe>
    </label>
</label>
