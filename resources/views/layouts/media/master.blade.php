<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.media.includes.head')
</head>
<body class="bg-color-primary">

    {{-- B Header --}}
    @include('layouts.media.header')
    {{-- E Header --}}

    {{-- B Main Movies & Series --}}
    @yield('content')
    {{-- E Main Movies & Series --}}

    {{-- B Footer --}}
    @include('layouts.media.footer')
    {{-- E Footer --}}

    {{-- B Scripts --}}
    @include('layouts.media.includes.scripte')
    {{-- E Scripts --}}
</body>
</html>

