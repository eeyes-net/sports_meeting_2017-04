<?php

namespace app\admin\controller;

use app\traits\controller\MustLogin;

class Controller extends \think\Controller
{
    use MustLogin;

    protected $beforeActionList = ['mustLogin'];
}
