<?php

namespace App\Http\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
}
