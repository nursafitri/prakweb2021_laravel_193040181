<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
