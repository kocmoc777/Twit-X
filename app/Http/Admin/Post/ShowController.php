<?php

namespace App\Http\Admin\Post;

use App\Models\Post;


class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }
}
