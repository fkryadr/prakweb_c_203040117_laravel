
@extends('layouts.main')

@section('container')

    <h1 class="font-bold">{{ $title }}</h1>

    <div class="row">
        <div class="grid grid-cols-6">
            <form action="/blog">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <fieldset class="w-full space-y-1 dark:text-gray-100">
                    <label for="Search" class="hidden">Search</label>
                    <div class="relative">
		<span class="absolute inset-y-0 left-0 flex items-center pl-2">
			<button type="submit" title="search" class="p-1 focus:outline-none focus:ring">
				<svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-gray-100">
					<path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
				</svg>
			</button>
		</span>
                        <input value="{{request('search')}}" type="text" name="search" placeholder="Search..." class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none dark:bg-gray-800 dark:text-gray-100 focus:dark:bg-gray-900 focus:dark:border-violet-400">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


    @if($posts->count())


        <div class="my-12 mx-12 max-w-10xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="object-cover" src="https://source.unsplash.com/1600x400?{{$posts[0]->category->name}}" alt="">
            </a>
            <div class="p-5">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}</h2>
                </a>
                <p class="">
                    <small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-blue-600 visited:text-purple-600" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a><br>
                        {{$posts[0]->created_at->diffForHumans()}}</small>
                    </small>
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
            </div>
        </div>





    <div class="container">
        <div class="my-12 row">
            <div class="grid grid-cols-3">
                @foreach($posts->skip(1) as $post)
                <div class="mx-4 my-4 max-w-lg p-4 shadow-md dark:bg-gray-900 dark:text-gray-100" bis_skin_checked="1">
                    <div class="flex justify-between pb-4 border-bottom" bis_skin_checked="1">
                        <div class="flex items-center" bis_skin_checked="1">
                            <a rel="noopener noreferrer" href="/blog?category={{ $post->category->slug }}" class="text-xl mb-0 capitalize dark:text-gray-100">{{ $post->category->name }}</a>
                        </div>
                        <a href="/posts/{{ $post->slug }}"><button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
                    </div>
                    <div class="space-y-4" bis_skin_checked="1">
                        <div class="space-y-2" bis_skin_checked="1">
                            <img src="https://source.unsplash.com/random/480x360/?{{$post->category->name}}" alt="" class="block object-cover object-center w-full rounded-md h-72 dark:bg-gray-500">
                            <div class="flex items-center text-xs" bis_skin_checked="1">
                                <p><small>By. <a class="my-4 text-blue-600 visited:text-purple-600" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a></small></p><span class="mx-2">{{$post->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                        <div class="space-y-2" bis_skin_checked="1">
                            <a rel="noopener noreferrer" href="/posts/{{ $post->slug }}" class="block">
                                <h3 class="text-xl font-semibold dark:text-violet-400">{{ $post->title }}</h3>
                            </a>
                            <p class="leading-snug dark:text-gray-400">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

        @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    {{ $posts->links() }}

@endsection





