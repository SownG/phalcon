<?php

use App\Models\Posts;

class PostController extends ControllerBase
{

    public function getPostsAction()
    {
        return $this->response(Posts::find());
    }

}

