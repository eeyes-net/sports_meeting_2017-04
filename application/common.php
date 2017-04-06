<?php

/**
 * 返回Auth实例
 *
 * @return \app\auth\model\Auth
 */
function auth()
{
    return \app\auth\model\Auth::instance();
}

/**
 * 返回PhpCas实例
 *
 * @return \PhpSimpleCas\PhpCas
 */
function phpCas()
{
    $phpCas = null;
    if (is_null($phpCas)) {
        $phpCas = new \PhpSimpleCas\PhpCas(config('cas.server_url'));
    }
    return $phpCas;
}
