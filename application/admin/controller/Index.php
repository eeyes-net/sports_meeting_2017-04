<?php

namespace app\admin\controller;

class Index extends Controller
{
    public function index()
    {
        return redirect(url('admin/Department/index'));
    }
}
