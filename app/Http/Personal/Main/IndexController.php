<?php

namespace App\Http\Personal\Main;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{

    public function __invoke()
    {

        return view('personal.main.index');
    }
}
