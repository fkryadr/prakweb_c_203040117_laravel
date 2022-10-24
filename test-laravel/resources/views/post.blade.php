@extends('layouts.main')

@section('container')
    <article>
    <h2 class="font-bold my-4">{{ $post->title }}</h2>
    <p class="my-4">By. Bel's kennedy in <a class="underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a class="underline bottom-10" href="/blog">Kembali</a>
@endsection


