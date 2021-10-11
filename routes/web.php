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
        "title" => "About",
        "name" => "Muhamad Rifqi Maulana Santika",
        "email" => "193040092.muhamad@mail.unpas.ac.id",
        "image" => "profile.jpg"
    ]);
});




Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore hic explicabo velit? Doloribus dolorem 
            aliquam numquam labore. Voluptatibus dicta dolor veritatis magnam ducimus commodi nihil 
            itaque, eum perspiciatis delectus enim voluptate qui ut cum alias, ipsam eveniet quo autem 
            vero magni officiis facilis fugit! Fugiat id magni molestiae ipsa, tempora placeat?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore hic explicabo velit? Doloribus dolorem 
            aliquam numquam labore. Voluptatibus dicta dolor veritatis magnam ducimus commodi nihil 
            itaque, eum perspiciatis delectus enim voluptate qui ut cum alias, ipsam eveniet quo autem 
            vero magni officiis facilis fugit! Fugiat id magni molestiae ipsa, tempora placeat?"
        ]
    
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Maul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore hic explicabo velit? Doloribus dolorem 
            aliquam numquam labore. Voluptatibus dicta dolor veritatis magnam ducimus commodi nihil 
            itaque, eum perspiciatis delectus enim voluptate qui ut cum alias, ipsam eveniet quo autem 
            vero magni officiis facilis fugit! Fugiat id magni molestiae ipsa, tempora placeat?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptas 
            voluptatibus libero eaque quasi, quaerat vel voluptatum impedit a? Cumque, non fuga 
            corporis placeat pariatur repellendus ipsa, est asperiores nam voluptatum doloribus 
            minus voluptates, sed veritatis earum labore hic explicabo velit? Doloribus dolorem 
            aliquam numquam labore. Voluptatibus dicta dolor veritatis magnam ducimus commodi nihil 
            itaque, eum perspiciatis delectus enim voluptate qui ut cum alias, ipsam eveniet quo autem 
            vero magni officiis facilis fugit! Fugiat id magni molestiae ipsa, tempora placeat?"
        ]
    
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});