<?php

namespace app\traits\controller;

trait MustGuest
{
    protected function mustGuest()
    {
        if (auth()->check()) {
            $this->redirect(url('admin/Index/index'));
        }
    }
}
