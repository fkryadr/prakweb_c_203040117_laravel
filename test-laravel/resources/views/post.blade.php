@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-center">
            <div class="">
                <article>
                    <h2 class="font-bold my-4">{{ $post->title }}</h2>
                    <p class="text-left my-4">By. <a class="text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>



    <article>
    <h2 class="font-bold my-4">{{ $post->title }}</h2>
    <p class="my-4">By. <a class="text-blue-600 visited:text-purple-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a class="underline bottom-10" href="/blog">Kembali</a>
@endsection


