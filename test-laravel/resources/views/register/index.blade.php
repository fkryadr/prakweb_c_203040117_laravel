@extends('layouts.main')

@section('container')
    <div class="">
        <div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 dark:bg-gray-900 dark:text-gray-100">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Registration</h1>
                <p class="text-sm dark:text-gray-400">Sign up new account</p>
            </div>
            <form novalidate="" action="" class="space-y-12 ng-untouched ng-pristine ng-valid">
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block mb-2 text-sm">Nama</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm">Username</label>
                        <input type="text" name="username" id="username" placeholder="username" class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm">Email address</label>
                        <input type="email" name="email" id="email" placeholder="your-email@email.com" class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm">Password</label>
                        </div>
                        <input type="password" name="password" id="password" placeholder="*****" class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm">Repeat Password</label>
                        </div>
                        <input type="password" name="password" id="password" placeholder="*****" class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    </div>
                </div>
                <div class="space-y-2">
                    <div>
                        <button type="button" class="w-full px-8 py-3 font-semibold rounded-md dark:bg-blue-800 dark:text-white-900">Sign Up</button>
                    </div>
                    <p class="px-6 text-sm text-center dark:text-gray-400">Already have an account?
                        <a rel="noopener noreferrer" href="/login" class="hover:underline dark:text-violet-400">Sign in</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>

@endsection
