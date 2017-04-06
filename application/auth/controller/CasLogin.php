<?php

namespace app\auth\controller;

class CasLogin extends Controller
{
    public static function login()
    {
        $net_id = phpCas()->getUserOrRedirect();
        if (!auth()->casLogin($net_id)) {
            return redirect(url('index/Index/index'));
        }
        return redirect(url('admin/Index/index'));
    }
}
