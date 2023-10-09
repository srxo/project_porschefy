<?php

namespace App\Models;

class Post
{
    public static function find($slug)
    {
        base_path();
        if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
            return redirect('/');
        }

        return cache()->remember("posts.{$slug}", 3600,  () use ($path));

    }
}
