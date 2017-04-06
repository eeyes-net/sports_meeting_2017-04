<?php
use think\Route;

Route::get('/', 'index/Index/index');

Route::get('login', 'auth/CasLogin/login');
Route::post('logout', 'auth/CasLogin/logout');

Route::group('admin', function () {
    Route::get('/', 'index/Index/index');
});
