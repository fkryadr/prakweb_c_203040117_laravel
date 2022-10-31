
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">Post Category</h1>



    <div class="container">
        <div class="row">
            <div class="grid grid-cols-3">
            @foreach($categories as $category)
                    <div class="my-4 mx-4 p-4 shadow-md dark:bg-gray-900 dark:text-gray-100">
                        <div class="flex justify-between pb-4 border-bottom">
                            <div class="flex items-center">
                                <a rel="noopener noreferrer" href="/blog?category={{$category->slug}}" class="mb-0 capitalize dark:text-gray-100">{{ $category->name }}</a>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <img src="https://source.unsplash.com/random/500x500/?{{$category->name}}" alt="{{$category->name}}" class="block object-cover object-center w-full rounded-md h-72 dark:bg-gray-500">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection





