<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // ambil jumlah user, post, dan category
        $author = User::count();
        $category = Category::count();
        $post = Post::count();
        $category_name = Category::latest()->paginate(2);

        // Untuk last posts
        $posts = Post::latest()->paginate(6);

        // kembalikan view dengan beberapa data user post category
        return view(
            'home',
            [
                "title" => 'Home',
                "posts" => $posts,
                "post" => $post,
                "category" => $category,
                "user" => $author,
                "category_name" => $category_name
            ]
        );
    }
}
