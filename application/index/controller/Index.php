<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $departments = \app\common\model\Department::order('medal_count', 'desc')->select();
        $games_14am_track = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 00:00:00', '2017-04-14 11:59:59'])->where('type', '1')->order('begin_time', 'asc')->select();
        $games_14am_field = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 00:00:00', '2017-04-14 11:59:59'])->where('type', '2')->order('begin_time', 'asc')->select();
        $games_14pm_track = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 12:00:00', '2017-04-14 23:59:59'])->where('type', '1')->order('begin_time', 'asc')->select();
        $games_14pm_field = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-14 12:00:00', '2017-04-14 23:59:59'])->where('type', '2')->order('begin_time', 'asc')->select();
        $games_15am_track = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 00:00:00', '2017-04-15 11:59:59'])->where('type', '1')->order('begin_time', 'asc')->select();
        $games_15am_field = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 00:00:00', '2017-04-15 11:59:59'])->where('type', '2')->order('begin_time', 'asc')->select();
        $games_15pm_track = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 12:00:00', '2017-04-15 23:59:59'])->where('type', '1')->order('begin_time', 'asc')->select();
        $games_15pm_field = \app\common\model\Game::whereTime('begin_time', 'between', ['2017-04-15 12:00:00', '2017-04-15 23:59:59'])->where('type', '2')->order('begin_time', 'asc')->select();
        $posts = \app\common\model\Post::all();
        $medal_data = [];
        foreach ($departments as $department) {
            if ($department->medal_count <= 0) {
                // continue;
            }
            $medal_data[] = [
                'value' => $department->medal_count,
                'name' => $department->name,
            ];
        }
        $medal_data = json_encode($medal_data, JSON_UNESCAPED_UNICODE);
        return $this->fetch('', compact('departments', 'posts', 'medal_data',
            'games_14am_track',
            'games_14am_field',
            'games_14pm_track',
            'games_14pm_field',
            'games_15am_track',
            'games_15am_field',
            'games_15pm_track',
            'games_15pm_field'
        ));
    }
}
