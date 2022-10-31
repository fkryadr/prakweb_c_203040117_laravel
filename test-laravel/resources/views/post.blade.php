@extends('layouts.main')

@section('container')

    <div class="p-4 container">
        <div class="row justify-center">
            <div class="max-w-xls p-6 overflow-hidden rounded-lg shadow dark:bg-gray-900 dark:text-gray-100" bis_skin_checked="1">
                <h2 class="text-4xl font-bold">{{ $post->title }}</h2>
                <img class="my-4" src="https://source.unsplash.com/random/1200x400/?{{$post->category->name}}" alt="{{$post->category->name}}">
                <article>
                    <p class="font-light text-xs mt-4 dark:text-gray-300">{!! $post->body !!}</p>
                    <div class="flex items-center mt-8 space-x-4" bis_skin_checked="1">
                        <img src="https://source.unsplash.com/100x100/?portrait" alt="" class="w-10 h-10 rounded-full dark:bg-gray-500">
                        <div bis_skin_checked="1">
                            <h3 class="text-sm font-medium">{{ $post->author->name }}</h3>
                            <p><small>in <a class="text-blue-600 visited:text-purple-600" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small></p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>


    <a class="text-blue-600 visited:text-purple-600 underline" href="/blog">Back to Posts</a>
@endsection


