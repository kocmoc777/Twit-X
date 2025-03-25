<?php

namespace App\Http\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;


class ShowController extends Controller
{
    public function show(Post $post)
    {
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        return view('main.show', compact('post', 'relatedPosts'));
    }
//    public function show()
//    {
//        return view('main.show');
//    }
}
