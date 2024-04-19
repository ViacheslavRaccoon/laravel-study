<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function get_post_by_id($post_id)
    {
        $post = Post::find($post_id);
        dd($post);
    }
    public function get_posts()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }
    public function get_posts_by_publish()
    {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }
}
