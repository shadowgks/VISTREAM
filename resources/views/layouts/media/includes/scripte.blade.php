{{-- Media --}}
<script src="{{ asset('build/assets/vendors/jquery/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/vendors/swiper/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/vendors/flowbite/cdn.min.js') }}"></script>
<script src="{{ asset('build/assets/js/parsleyjs.js') }}"></script>
{{-- <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script> --}}
<script src="{{ asset('build/assets/vendors/flatpickr/cdn.min.js') }}"></script>
<!--datePicker-->
{{-- Ajax laravel --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('build/assets/js/main.js') }}"></script>
{{-- comments --}}
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://vistream-com.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        // console.log(d.body);

    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

{{-- if you need ad more scriptes --}}
@yield('scripte')
