<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{{-- B X-CSRF-TOKEN documentaion laravel --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- E X-CSRF-TOKEN documentaion laravel --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('build/assets/css/vendors/swiper.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('build/assets/css/parsleyjs.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/sass/style.css') }}">
{{-- <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" /> Video play --}}
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />

@vite(['resources/css/app.css'])
{{-- if you need ad more links --}}
@yield('link')
