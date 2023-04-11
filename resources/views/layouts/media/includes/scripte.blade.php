{{-- Media --}}
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
<script src="{{ asset('build/assets/js/parsleyjs.js') }}"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script><!--datePicker-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('build/assets/js/main.js') }}"></script>


{{-- if you need ad more scriptes --}}
@yield('scripte')
