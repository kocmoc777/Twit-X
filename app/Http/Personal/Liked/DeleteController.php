<?php

namespace App\Http\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;


class DeleteController extends Controller
{

    public function __invoke(Post $post )
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
