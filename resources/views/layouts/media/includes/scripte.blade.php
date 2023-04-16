{{-- Media --}}
<script src="{{ asset('build/assets/vendors/jquery/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/vendors/swiper/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/vendors/flowbite/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/js/parsleyjs.js') }}"></script>
{{-- <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script> --}}
<script src="{{ asset('build/assets/vendors/flatpickr/cdn.min.js') }}"></script>
<!--datePicker-->
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
