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
        $posts = Post::all();

        return view('posts');
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
    public function post_delete(Request $request, PostService $service)
    {
        $service->delete_post($request->id);
    }
    public function post_restore(PostService $service)
    {
        $service->restore_post();
    }
    public function firstOrCreate(Request $request,PostService $service)
    {
        $service->firstOrCreate($request->id);
    }
    public function updateOrCreate(Request $request,PostService $service)
    {
        $service->updateOrCreate($request->id);
    }

    public function SomaFunction()
    {
//        Sone();
    }
}
