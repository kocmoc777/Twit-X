<?php

namespace App\Http\Admin\Post;


use App\Models\Post;


class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }

}
