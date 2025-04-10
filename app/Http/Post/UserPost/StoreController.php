<?php

namespace App\Http\Post\UserPost;

use App\Http\Requests\Personal\Post\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('personal.post.index');
    }
}
