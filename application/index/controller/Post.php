<?php

namespace app\index\controller;

use think\Controller;

class Post extends Controller
{
    public function read($id)
    {
        $post = \app\common\model\Post::get($id);
        return $post->body;
    }
}
