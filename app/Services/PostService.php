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
    public function create_posts()
    {
        $postsArr = [
            [
                'title' => 'New Title',
                'content' => 'New Content',
                'image' => 'new_image.jpg',
                'likes' => 20,
                'is_published'=> 1
            ],
            [
                'title' => 'New Title Once',
                'content' => 'New Content Once',
                'image' => 'new_image_once.jpg',
                'likes' => 50,
                'is_published'=> 1
            ]
        ];

        foreach ($postsArr as $posts) {
            Post::create($posts);
        }
        dd('created');
    }
    public function update_post($post_id)
    {
        $post = Post::where(['id' => $post_id])->first();
        $post->update([
            'title' => 'New Title Update',
            'content' => 'New Content Update',
            'image' => 'new_image_update.jpg',
            'likes' => 55,
            'is_published'=> 1
        ]);
    }
}
