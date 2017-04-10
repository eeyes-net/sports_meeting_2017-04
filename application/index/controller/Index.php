<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $departments = \app\common\model\Department::all();
        $games = \app\common\model\Game::all();
        $posts = \app\common\model\Post::all();
        array(
            'departments' => $departments,
            'games' => $games,
            'posts' => $posts,
        );
        return $this->fetch('', compact('departments', 'games', 'posts'));
    }
}
