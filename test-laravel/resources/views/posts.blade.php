
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">Ini Halaman Posts</h1>

@foreach($posts as $post)
    <article class="m-8">
    <h2 class="my-2 underline"><a href="/posts/{{$post["slug"]}}">{{$post ["title"] }}</a></h2>
    <h5 class="my-2 font-bold">By: {{$post ["author"] }}</h5>
    <p>{{$post ["body"] }}</p>
    </article>
@endforeach

@endsection





