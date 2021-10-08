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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Nur Safitri Wulandari",
        "email" => "193040181@mail.unpas.ac.id",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "The Feels",
            "slug" => "judul-post-pertama",
            "author" => "Nur Safitri Wulandari",
            "body" => "TWICE english single The Feels, Released October 1, 2021."
        ],
        [
            "title" => "Formula of Love O+T=<3",
            "slug" => "judul-post-kedua",
            "author" => "Nur Safitri Wulandari",
            "body" => "TWICE 3rd Full Album. Formula of Love O+T=<3. Release on November 12, 2021"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "The Feels",
            "slug" => "judul-post-pertama",
            "author" => "Nur Safitri Wulandari",
            "body" => "TWICE english single The Feels, Released October 1, 2021."
        ],
        [
            "title" => "Formula of Love O+T=<3",
            "slug" => "judul-post-kedua",
            "author" => "Nur Safitri Wulandari",
            "body" => "TWICE 3rd Full Album. Formula of Love O+T=<3. Release on November 12, 2021"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
