<?php

namespace App\Http\Admin\Post;

use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
}
