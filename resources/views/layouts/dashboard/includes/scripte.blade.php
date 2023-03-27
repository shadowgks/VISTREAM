<!--start::Global javascript (used in all pages)-->
<script src="{{asset('build/assets/vendors/alpinejs/dist/cdn.min.js')}}"></script><!-- core js -->
<script src="{{asset('build/assets/vendors/flatpickr/dist/flatpickr.min.js')}}"></script><!-- input date -->
<script src="{{asset('build/assets/vendors/flatpickr/dist/plugins/rangePlugin.js')}}"></script><!-- input range date -->
<script src="{{asset('build/assets/vendors/%40yaireo/tagify/dist/tagify.min.js')}}"></script><!-- input tags -->
<script src="{{asset('build/assets/vendors/simple-datatables/dist/umd/simple-datatables.js')}}"></script><!--sort table-->
<!--end::Global javascript (used in all pages)-->

<!-- Minify Global javascript (for production purpose) -->
<!--start::Demo javascript ( initialize global javascript )-->

<script src="{{asset('build/assets/js/demo.js')}}"></script>

<script src="{{asset('build/assets/vendors/chart.js/dist/chart.min.js')}}"></script><!-- charts -->
<!-- chart config -->
<script src="{{asset('build/assets/js/chart/sales.js')}}"></script>

<!--start::Customizer js ( Only for demo purpose )-->
<script src="{{asset('build/assets/js/customizer.js')}}"></script>
<script src="{{asset('build/assets/js/modal.js')}}"></script> <!--modal js-->

@yield('scripte')
