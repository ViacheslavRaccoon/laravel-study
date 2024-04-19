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
}
