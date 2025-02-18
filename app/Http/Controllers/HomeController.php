<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index()
    {
//        return view('twit/home');
//        return view('twit/signup');
        return view('twit/login');
    }

}
