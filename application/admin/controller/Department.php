<?php

namespace app\admin\controller;

use think\Request;
use think\Session;

class Department extends Controller
{
    public function index()
    {
        $departments = \app\common\model\Department::all();
        return $this->fetch('', compact('departments'));
    }

    public function save(Request $request)
    {
        $department = new \app\common\model\Department;
        $department->name = $request->post('name');
        $department->medal_count = $request->post('medal_count');
        $department->save();
        Session::flash('success', $department->name . '更新成功');
        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function update(Request $request, $id)
    {
        $department = \app\common\model\Department::get($id);
        $department->name = $request->put('name');
        $department->medal_count = $request->put('medal_count');
        $department->save();
        Session::flash('success', $department->name . '更新成功');
        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete($id)
    {
        \app\common\model\Department::destroy($id);
        $this->success();
    }
}
