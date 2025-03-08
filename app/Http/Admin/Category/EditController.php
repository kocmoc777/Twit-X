<?php

namespace App\Http\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;


class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }
}
