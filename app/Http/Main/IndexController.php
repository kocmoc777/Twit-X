<?php

namespace App\Http\Main;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {
        return view('main.home');
    }

    public function login()
    {
        return view('main.login');
    }

    public function signup()
    {
        return view('main.signup');
    }

}
