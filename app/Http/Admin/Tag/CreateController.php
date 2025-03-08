<?php

namespace App\Http\Admin\Tag;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.tag.create');
    }
}
