<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title =  ' in ' . $category->name;
        }

        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
        }

        return view('posts', [
            "title" => "All Posts " . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']),)->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        $comments = Comment::latest()->where('post_id', $post->id)->paginate();
        $username = '';
        if (auth()->user()) {
            $username = auth()->user()->username;
        }

        $posts = Post::latest()->paginate(5);

        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post,
            "comments" => $comments,
            "username" => $username,
            "posts" => $posts
        ]);
    }
}
