<?php

namespace App\Http\Personal\Liked;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{

    public function __invoke()
    {
        $posts =auth()->user()->likedPosts;
        return view('personal.liked.index',compact('posts'));
    }
}
