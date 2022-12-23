<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
// extends Model
use HasFactory;
// 

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
