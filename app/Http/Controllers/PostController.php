<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_post(Request $request, PostService $service)
    {
        $service->get_post_by_id($request->id);
    }

    public function get_posts(PostService $service)
    {
        $service->get_posts();
    }
    public function get_posts_by_publish(PostService $service)
    {
        $service->get_posts_by_publish();
    }
    public function posts_create(PostService $service)
    {
        $service->create_posts();
    }

    public function post_update(Request $request, PostService $service)
    {
        $service->update_post($request->id);
    }
}
