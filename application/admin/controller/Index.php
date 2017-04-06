<?php

namespace app\admin\controller;

use think\Request;

class Index extends Controller
{
    public function index()
    {
        return redirect(url('admin/Department/index'));
    }
}
