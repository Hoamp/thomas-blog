<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->where('user_id', auth()->user()->id)->paginate();

        return view('about.index', [
            'title' => 'About',
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
    }
}
