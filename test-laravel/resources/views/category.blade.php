
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">Post Category : {{ $category }}</h1>

@foreach($posts as $post)
    <article class="m-8">
    <h2 class="my-2 underline"><a href="/posts/{{ $post->slug }}">{{$post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
    </article>
@endforeach

@endsection





