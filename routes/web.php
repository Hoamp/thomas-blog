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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => 'Thomas Setiawan',
        "image" => "/img/thomasjd.jpeg",
        "title" => "About"
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Aku",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo delectus doloremque fugit fuga nisi et provident facilis, aliquam accusantium ratione voluptatem. Voluptates pariatur eveniet minima aut ducimus sequi numquam impedit blanditiis repellat placeat inventore laudantium quis ea rem, cupiditate iusto sapiente laboriosam adipisci nisi in! Ipsam odit maxime dolore necessitatibus consectetur quo, hic numquam molestias atque ex itaque debitis tenetur non in quaerat a maiores minima illo voluptatem nihil eaque.",
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Saya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo delectus doloremque fugit fuga nisi et provident facilis, aliquam accusantium ratione voluptatem. Voluptates pariatur eveniet minima aut ducimus sequi numquam impedit blanditiis repellat placeat inventore laudantium quis ea rem, cupiditate iusto sapiente laboriosam adipisci nisi in! Ipsam odit maxime dolore necessitatibus consectetur quo, hic numquam molestias atque ex itaque debitis tenetur non in quaerat a maiores minima illo voluptatem nihil eaque.",
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Aku",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo delectus doloremque fugit fuga nisi et provident facilis, aliquam accusantium ratione voluptatem. Voluptates pariatur eveniet minima aut ducimus sequi numquam impedit blanditiis repellat placeat inventore laudantium quis ea rem, cupiditate iusto sapiente laboriosam adipisci nisi in! Ipsam odit maxime dolore necessitatibus consectetur quo, hic numquam molestias atque ex itaque debitis tenetur non in quaerat a maiores minima illo voluptatem nihil eaque.",
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Saya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo delectus doloremque fugit fuga nisi et provident facilis, aliquam accusantium ratione voluptatem. Voluptates pariatur eveniet minima aut ducimus sequi numquam impedit blanditiis repellat placeat inventore laudantium quis ea rem, cupiditate iusto sapiente laboriosam adipisci nisi in! Ipsam odit maxime dolore necessitatibus consectetur quo, hic numquam molestias atque ex itaque debitis tenetur non in quaerat a maiores minima illo voluptatem nihil eaque.",
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
