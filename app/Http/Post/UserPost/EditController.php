<?php

namespace App\Http\Post\UserPost;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('personal.post.edit', compact('post', 'categories', 'tags'));
    }
}
