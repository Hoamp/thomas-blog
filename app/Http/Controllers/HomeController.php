<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::latest()->paginate(6);
        return view('home', ["title" => 'Home', "posts" => $post]);
    }
}
