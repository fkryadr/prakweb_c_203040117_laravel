<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Fikri Adrian",
        "email" => "fkryadr@yandex.com",
        "image" => "okky.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri Adrian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Okky Boy",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consequatur corporis dignissimos fugit molestiae nobis possimus quasi reiciendis rem. "
        ],
    ];
    return view('posts',['title' => 'Posts',
        'posts' => $blog_posts
    ]);
});


// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri Adrian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Okky Boy",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet beatae blanditiis cum cupiditate dolor dolore dolorem dolores doloribus earum, eos fuga fugiat fugit ipsum iusto labore nemo nihil, odit quam qui quibusdam repudiandae suscipit tenetur ullam vero? Ab at dignissimos ducimus officia. Commodi consequatur ducimus excepturi facere fuga ipsam odit omnis quaerat, sapiente suscipit. Animi architecto dignissimos enim exercitationem laborum maiores quam quasi sit tenetur. Distinctio dolor doloremque enim error, eveniet exercitationem omnis perferendis possimus, quibusdam quod, reiciendis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consequatur corporis dignissimos fugit molestiae nobis possimus quasi reiciendis rem. "
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

