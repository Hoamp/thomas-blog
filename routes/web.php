<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => 'Thomas Setiawan',
        "image" => "/img/thomasjd.jpeg",
        "email" => "thomas@gmail.com",
        "title" => "About",
        "active" => "about"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'active' => 'categories'
    ]);
});

/* Nonaktif sementara
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : " . $category->name,
        'posts' => $category->posts->load('category', 'author'),
        'active' => 'categories'
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'All Post By: ' . $author->name,
        'posts' => $author->posts->load('category', 'author'),
        'active' => 'posts'
    ]);
});
*/

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
