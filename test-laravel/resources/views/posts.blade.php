
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">{{ $title }}</h1>

@foreach($posts as $post)
    <article class="m-8 border-b-4 border-500">
    <h2 class="my-2"><a href="/posts/{{ $post->slug }}">{{$post->title }}</a></h2>
        <p class="my-4 text-blue-600 visited:text-purple-600">By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-blue-600 visited:text-purple-600" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p class="my-4">{{ $post->excerpt }}</p>

        <a class="border-none text-blue-600 visited:text-purple-600" href="/posts/{{ $post->slug }}">Read More</a>

    </article>
@endforeach

@endsection





