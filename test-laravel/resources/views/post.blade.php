@extends('layouts.main')

@section('container')
    <article>
    <h2 class="font-bold my-4">{{$post["title"]}}</h2>
    <h5 class="font-bold my-4">{{$post["author"]}}</h5>
    <p class="">{{$post["body"]}}</p>
    </article>

    <a class="underline bottom-10" href="/blog">Kembali</a>
@endsection


