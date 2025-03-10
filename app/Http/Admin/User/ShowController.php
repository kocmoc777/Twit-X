<?php

namespace App\Http\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;


class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.user.show', compact('user'));
    }
}
