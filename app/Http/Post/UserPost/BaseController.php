<?php

namespace App\Http\Post\UserPost;

use App\Http\Controllers\Controller;
use App\Service\PostService;


class BaseController extends Controller
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

}
