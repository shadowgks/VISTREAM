@extends('layouts.media.master')

@section('title')
    Login
@endsection

@section('content')
    <!-- login -->
    <div id="login-page">
        <div class="max-w-6xl relative z-10 m-auto px-6 mt-16">
            <div class="flex justify-center items-center login-section">
                <div class="bg-color-primary-75 text-white p-10 sm:m-auto md:m-auto lg:m-0 shadow"
                    style="min-height: 524px;">
                    <div class="sm:w-full text-left m-auto lg:m-0">
                        <h1 class="text-3xl md:text-4xl font-bold mb-3">Login to your account</h1>
                        <p class="mb-10">Not a member yet? <a class="no-underline tw-blue text-color-three" href="">Sign
                                up</a></p>
                        <div class="w-full">
                            <form action="" method="POST" id="login-form">
                                <div>
                                    <label for="email" class="block text-sm font-medium leading-8">
                                        Email address
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input id="email" value="" type="email" placeholder="Email" name="email"
                                            autocomplete="email" autofocus="" required=""
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label for="password" class="block text-sm font-medium leading-8">
                                        Password
                                    </label>
                                    <div class="mt-1 rounded-md">
                                        <input type="password" placeholder="Password" name="password" required=""
                                            autocomplete="current-password"
                                            class="appearance-none block w-full px-3 py-2 text-gray-700 rounded-md placeholder-gray-400 focus:outline-none focus:outline-color-three transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                    </div>
                                </div>

                                <div class="mt-2 flex flex-col md:flex-row justify-between">
                                    <div class="flex items-center">
                                        <input id="remember-me" type="checkbox"
                                            class="form-checkbox h-4 w-4 tw-blue transition duration-150 ease-in-out">
                                        <label for="remember-me" class="ml-2 block text-sm leading-5">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="text-sm leading-5 mt-4 md:mt-0">
                                        <a href="/password-reset/"
                                            class="font-medium tw-blue focus:outline-none no-underline transition ease-in-out duration-150">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <span class="block w-full rounded-md">
                                        <button type="submit" name="login"
                                            class="w-full flex justify-center py-2 px-4 border border-transparent text-md font-medium rounded-md text-white bg-color-secondary hover:bg-color-three transition duration-500">
                                            Log in
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-10 md:pt-0 lg:pt-0 m-auto md:m-0 lg:m-0 hidden md:block lg:block">
                    <img class="rounded-lg md:ml-4 lg:ml-4 h-[524px]" src="{{asset('build/assets/images/svg/login.svg')}}"
                        alt="svg login">
                </div>
            </div>
        </div>
    </div>
@endsection
