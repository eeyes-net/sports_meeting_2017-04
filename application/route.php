<?php
use think\Route;

Route::get('/', 'index/Index/index');

Route::get('login', 'auth/CasLogin/login');
Route::post('logout', 'auth/CasLogin/logout');

Route::group('admin', function () {
    Route::get('/', 'admin/Index/index');
    Route::group('game', function () {
        Route::get('/', 'admin/Game/index');
        Route::put(':id', 'admin/Game/update');
        Route::delete(':id', 'admin/Game/delete');
    });
    Route::group('department', function () {
        Route::get('/', 'admin/Department/index');
        Route::post('/', 'admin/Department/save');
        Route::put(':id', 'admin/Department/update');
        Route::delete(':id', 'admin/Department/delete');
    });
    Route::group('post', function () {
        Route::get('/', 'admin/Post/index');
        Route::get('create', 'admin/Post/create');
        Route::post('/', 'admin/Post/save');
        Route::get(':id/edit', 'admin/Post/edit');
        Route::put(':id', 'admin/Post/update');
        Route::delete(':id', 'admin/Post/delete');
    });
});
