@extends('layouts.media.master')

@section('title')
    Home
@endsection

@section('link_home_active')
    text-white
@endsection

@section('content')
    {{ $slot }}
@endsection
