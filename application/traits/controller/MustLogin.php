<?php

namespace app\traits\controller;

trait MustLogin
{
    protected function mustLogin()
    {
        if (!auth()->check()) {
            $this->redirect(url('auth/CasLogin/login'));
        }
    }
}
