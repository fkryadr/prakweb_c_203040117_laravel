@extends('layouts.main')

@section('container')




<h1 class="my-4 mx-4 font-bold">Ini Halaman About</h1>
<h3 class="my-4 mx-4">{{ $name }}</h3>
<p class="my-4 mx-4">{{ $email }}</p>
<img class="w-36 h-36 rounded mx-4" src="img/{{ $image }}" alt="{{ $name }}>" width="200px">
@endsection

