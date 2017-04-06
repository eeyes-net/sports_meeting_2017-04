<?php

namespace app\auth\controller;

use app\traits\controller\MustGuest;

class Controller extends \think\Controller
{
    use MustGuest;

    protected $beforeActionList = ['mustGuest' => ['except' => 'logout']];
}
