@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-700 border-gray-700 focus:border-color-three focus:ring-0 shadow-sm rounded-md']) !!}>
{{-- <p class="bg-color-three"></p> --}}
