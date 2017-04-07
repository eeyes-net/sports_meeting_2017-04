<?php

namespace app\auth\controller;

class CasLogin extends Controller
{
    public function login()
    {
        $net_id = phpCas()->getUserOrRedirect();
        if (!auth()->casLogin($net_id)) {
            return $this->fetch('not_admin');
        }
        return redirect(url('admin/Index/index'));
    }

    public static function logout()
    {
        auth()->logout();
        return redirect(url('index/Index/index'));
    }
}
