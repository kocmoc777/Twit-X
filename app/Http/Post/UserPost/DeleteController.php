<?php

namespace App\Http\Post\UserPost;


use App\Models\Post;


class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('personal.post.index');
    }

}
