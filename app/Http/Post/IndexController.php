<?php

namespace App\Http\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;


class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(1);
        $likesPosts = Post::withCount('likedUser')->orderBy('liked_users_count' , 'DESC')->get()->take(4);
        return view('main.index', compact('posts', 'randomPosts', 'likesPosts'));
    }


}
