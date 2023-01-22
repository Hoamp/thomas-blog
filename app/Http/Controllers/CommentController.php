<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'post_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);

        return redirect('/posts/' . $request->slug);
    }
}
