<?php

namespace App\Http\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;


class IndexController extends Controller
{
//    public function index()
//    {
//        $posts = UserPost::paginate(6);
//        $randomPosts = UserPost::get()->random(4);
//        $likesPosts = UserPost::withCount('likedUser')->orderBy('liked_users_count' , 'DESC')->get()->take(4);
//        return view('main.home', compact('posts', 'randomPosts', 'likesPosts'));
//    }

//    public function login()
//    {
//        return view('main.login');
//    }
//
//    public function signup()
//    {
//        return view('main.signup');
//    }
//    public function create()
//    {
//        return view('main.create');
//    }
//    public function show()
//    {
//        return view('main.show');
//    }

}
