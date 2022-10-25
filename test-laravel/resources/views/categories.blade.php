
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">Post Category</h1>

@foreach($categories as $category)
    <ul>
        <li>
            <h2 class="my-2 underline"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>


@endforeach

@endsection





