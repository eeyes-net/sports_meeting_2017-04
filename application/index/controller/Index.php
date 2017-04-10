<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $departments = \app\common\model\Department::order('medal_count', 'desc')->select();
        $games14am = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 00:00:00', '2017-04-14 11:59:59'])->select();
        $games14pm = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 12:00:00', '2017-04-14 23:59:59'])->select();
        $games15am = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 00:00:00', '2017-04-15 11:59:59'])->select();
        $games15pm = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 12:00:00', '2017-04-15 23:59:59'])->select();
        $posts = \app\common\model\Post::all();
        return $this->fetch('', compact('departments', 'games14am', 'games14pm', 'games15am', 'games15pm', 'posts'));
    }
}
