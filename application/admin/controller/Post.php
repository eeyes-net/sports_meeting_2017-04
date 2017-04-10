<?php

namespace app\admin\controller;

use think\Request;

class Post extends Controller
{
    public function index()
    {
        $posts = \app\common\model\Post::order('id', 'desc')->select();
        return $this->fetch('', compact('posts'));
    }

    public function create()
    {
        return $this->fetch();
    }

    public function save(Request $request)
    {
        $post = new \app\common\model\Post;
        $post->title = $request->post('title');
        $post->body = $request->post('body');
        $post->save();
        $this->success();
    }

    public function edit($id)
    {
        $post = \app\common\model\Post::get($id);
        return $this->fetch('', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = \app\common\model\Post::get($id);
        $post->title = $request->put('title');
        $post->body = $request->put('body');
        $post->save();
        $this->success();
    }

    public function delete($id)
    {
        \app\common\model\Post::destroy($id);
        $this->success();
    }
}
