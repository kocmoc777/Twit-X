<?php

namespace App\Http\Post\UserPost;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $userId = Auth::id();
        $posts = Post::where('user_id', $userId)->get();

        return view('personal.post.index', compact('posts'));
    }
}
