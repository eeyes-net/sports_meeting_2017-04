<?php

namespace app\admin\controller;

use think\Request;

class Game extends Controller
{
    public function index()
    {
        $games = \app\common\model\Game::all();
        return $this->fetch('', compact('games'));
    }

    public function save(Request $request)
    {
        $game = new \app\common\model\Game;
        $game->name = $request->post('name');
        $game->begin_time = $request->post('begin_time');
        $game->champion = $request->post('champion');
        $game->save();
        $this->success();
    }

    public function update(Request $request, $id)
    {
        $game = \app\common\model\Game::get($id);
        $game->name = $request->put('name');
        $game->begin_time = $request->put('begin_time');
        $game->champion = $request->put('champion');
        $game->save();
        $this->success();
    }

    public function delete($id)
    {
        $game = \app\common\model\Game::get($id);
        $game->delete();
        $this->success();
    }
}
