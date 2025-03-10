<?php

namespace App\Http\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);

        return view('admin.post.show', compact('post'));
    }

}
