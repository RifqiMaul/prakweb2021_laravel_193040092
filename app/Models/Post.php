<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore hic explicabo velit? Doloribus dolorem 
            aliquam numquam labore?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore ic explicabo velit? Doloribus dolorem 
            aliquam numquam labore."
        ]
    
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
