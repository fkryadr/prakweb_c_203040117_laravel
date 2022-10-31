
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">{{ $title }}</h1>


    @if($posts->count())


        <div class="my-12 mx-12 max-w-10xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="object-cover" src="https://source.unsplash.com/1600x400?{{$posts[0]->category->name}}" alt="">
            </a>
            <div class="p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}</h2>
                </a>
                <p class="">
                    <small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-blue-600 visited:text-purple-600" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a><br>
                        {{$posts[0]->created_at->diffForHumans()}}</small>
                    </small>
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
            </div>
        </div>


    @endif


    <div class="container">
        <div class="my-12 row">
        @foreach($posts->skip(1) as $post)
                <div class="grid grid-cols-3">
                    <div class=" mx-12 my-12 max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title }}</h5>
                            </a>
                            <p class="">
                                <small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a><br>
                                    {{$post->created_at->diffForHumans()}}</small>
                            </p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
                        </div>
                    </div>

                    <div class="mx-12 my-12 max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title }}</h5>
                            </a>
                            <p class="">
                                <small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a><br>
                                    {{$post->created_at->diffForHumans()}}</small>
                            </p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
                        </div>
                    </div>

                    <div class="mx-12 my-12 max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title }}</h5>
                            </a>
                            <p class="">
                                <small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a><br>
                                    {{$post->created_at->diffForHumans()}}</small>
                            </p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
                        </div>
                    </div>


                </div>
        @endforeach
        </div>
    </div>


@endsection





