<?php

namespace app\admin\controller;

use think\Request;

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
        $department->name = $request->put('name');
        $department->medal_count = $request->put('medal_count');
        $department->save();
        $this->success();
    }

    public function update(Request $request, $id)
    {
        $department = \app\common\model\Department::get($id);
        $department->name = $request->put('name');
        $department->medal_count = $request->put('medal_count');
        $department->save();
        $this->success();
    }

    public function delete($id)
    {
        \app\common\model\Department::destroy($id);
        $this->success();
    }
}
