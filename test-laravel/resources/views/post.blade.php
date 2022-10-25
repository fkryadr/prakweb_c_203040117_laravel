@extends('layouts.main')

@section('container')
    <article>
    <h2 class="font-bold my-4">{{ $post->title }}</h2>
    <p class="my-4">By. <a class="text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a class="underline bottom-10" href="/blog">Kembali</a>
@endsection


