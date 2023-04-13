@extends('layouts.media.master')

@section('title')
    Register
@endsection

@section('content')
    <!-- Sign up -->
    <div id="signup-page">
        <div class="max-w-6xl relative z-10 m-auto px-6 mt-16">
            <div class="flex justify-center items-center login-section">
                <div class="bg-color-primary-75 text-white p-10 sm:m-auto md:m-auto lg:m-0 shadow order-2" style="min-height: 524px;">
                    <div class="sm:w-full text-left m-auto lg:m-0">
                        <h1 class="text-3xl md:text-4xl font-bold mb-3">Sign up Create Account</h1>
                        <p class="mb-10">Already have an account?
                            <a class="no-underline tw-blue text-color-three" href="{{ route('login') }}">Login
                            </a>
                        </p>
                        <div class="w-full">
                            <x-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}" id="login-form">
                                @csrf
                                <div>
                                    <label for="username" class="block text-sm font-medium leading-8">
                                        Username
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input id="username" value="" type="text" placeholder="Username" name="name" autocomplete="email" autofocus="" required=""
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label for="email" class="block text-sm font-medium leading-8">
                                        Email address
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input id="email" value="" type="email" placeholder="Email" name="email" autocomplete="email" autofocus="" required=""
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label for="password" class="block text-sm font-medium leading-8">
                                        Password
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input type="password" placeholder="Password" name="password" required="" autocomplete="new-password"
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label for="Password confirmation" class="block text-sm font-medium leading-8">
                                        Password
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input type="password" placeholder="Password Confirmation" name="password_confirmation" required="" autocomplete="new-password"
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <span class="block w-full rounded-md">
                                        <button type="submit" name="register" class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium rounded-md text-white bg-color-secondary hover:bg-color-three transition duration-500">
                                            Register
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-10 md:pt-0 lg:pt-0 m-auto md:m-0 lg:m-0 hidden md:block lg:block">
                    <img class="rounded-lg md:ml-4 lg:ml-4 h-[524px]" src="{{ asset('build/assets/images/svg/signup.svg') }}" alt="svg signup">
                </div>
            </div>
        </div>
    </div>
@endsection
