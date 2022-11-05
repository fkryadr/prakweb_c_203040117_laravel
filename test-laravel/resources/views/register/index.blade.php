@extends('layouts.main')

@section('container')
    <!-- component -->

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <div class="container rounded-md sm:p-10 dark:bg-gray-900 dark:text-gray-100 max-w-lg mx-auto md:py-24 flex justify-center">
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="md:mt-6">
                        <div class="text-center font-semibold text-white">
                            Registration
                        </div>
                        <div class="text-center font-base text-white">
                            Sign Up new Account
                        </div>
                        <form action="/register" method="post" class="mt-8" x-data="{password: '',password_confirm: ''}">
                            @csrf
                            <div class="mx-auto max-w-lg ">
                                <div class="py-1">
                                    <span class="px-1 text-sm text-white">Nama</span>
                                    <input value="{{old('name')}}" name="name" placeholder="Nama Kamu" type="text"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                dark:bg-gray-900 border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:dark:bg-gray-900 focus:border-gray-600 focus:outline-none">
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-white">Username</span>
                                    <input value="{{old('username')}}" name="username" placeholder="Your Username" type="text"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                dark:bg-gray-900 border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:dark:bg-gray-900 focus:border-gray-600 focus:outline-none">
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-white">Email</span>
                                    <input value="{{old('email')}}" placeholder="contoh@domain.com" name="email" type="email"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                dark:bg-gray-900 border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-white">Password</span>
                                    <input placeholder="********" type="password" x-model="password"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                dark:bg-gray-900 border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-white">Password Confirm</span>
                                    <input placeholder="********" type="password" x-model="password_confirm"
                                           class="text-md block px-3 py-2 rounded-lg w-full
                dark:bg-gray-900 border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                </div>
                                <div class="flex justify-start mt-3 ml-4 p-1">
                                    <ul>
                                        <li class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': password == password_confirm && password.length > 0, 'bg-red-200 text-red-700':password != password_confirm || password.length == 0}"
                                                 class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path x-show="password == password_confirm && password.length > 0" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M5 13l4 4L19 7"/>
                                                    <path x-show="password != password_confirm || password.length == 0" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M6 18L18 6M6 6l12 12"/>

                                                </svg>
                                            </div>
                                            <span :class="{'text-green-700': password == password_confirm && password.length > 0, 'text-red-700':password != password_confirm || password.length == 0}"
                                                  class="font-medium text-sm ml-3"
                                                  x-text="password == password_confirm && password.length > 0 ? 'Passwords match' : 'Passwords do not match' "></span>
                                        </li>
                                        <li class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': password.length > 7, 'bg-red-200 text-red-700':password.length < 7 }"
                                                 class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path x-show="password.length > 7" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M5 13l4 4L19 7"/>
                                                    <path x-show="password.length < 7" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M6 18L18 6M6 6l12 12"/>

                                                </svg>
                                            </div>
                                            <span :class="{'text-green-700': password.length > 7, 'text-red-700':password.length < 7 }"
                                                  class="font-medium text-sm ml-3"
                                                  x-text="password.length > 7 ? 'The minimum length is reached' : 'At least 8 characters required' "></span>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit" class="mt-3 text-lg font-semibold
            dark:bg-blue-500 dark:text-gray-900 bg-blue-500 text-white w-full py-2 rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                    Register
                                </button>
                            </div>
                        </form>

                        <div class="text-xl font-semibold py-6 flex justify-center">
                            <a href="/login"
                               class="text-white font-normal border-gray-200 hover:border-teal-500">You're already member?
                                <span class="text-blue-500 font-semibold">Login</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
