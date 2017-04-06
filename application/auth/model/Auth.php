<?php

namespace app\auth\model;

use think\Session;

class Auth
{
    /** @var Auth $instance */
    protected static $instance = null;
    /** @var string $username */
    protected $username = '';

    public function __construct()
    {
        if ($this->check()) {
            if (!$this->casLogin(Session::get('username'))) {
                $this->logout();
            }
        }
    }

    /**
     * 单例
     *
     * @return Auth
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 判断是否登录
     *
     * @return bool
     */
    public function check()
    {
        return Session::has('username');
    }

    /**
     * CAS登录
     *
     * @param string $net_id
     *
     * @return bool 是否登录成功
     */
    public function casLogin($net_id)
    {
        if (!in_array($net_id, config('auth.net_ids'))) {
            return false;
        }
        Session::set('username', $net_id);
        return true;
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        Session::delete('username');
        phpCas()->logout();
    }
}
