<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::get('/','index/index/index');
Route::get('index/:id','admin/index/index');
Route::get('user','admin/user/index');
Route::get('user/add','admin/user/add');
Route::post('user/store','admin/user/store');
Route::post('user/update','admin/user/update');
Route::get('user/del/:id','admin/user/del');
Route::get('user/edit/:id','admin/user/edit');
Route::get('user/delete/:id','admin/user/delete');

Route::get('dota','dota/dota/index');

Route::get('hero','dota/dota/hero');
Route::get('user_hero','dota/dota/user_hero');
Route::get('match','dota/dota/match');

Route::get('test','admin/user/max');
Route::get('xml','admin/user/xmltest');
Route::get('domxml','admin/user/domxml');
return [
    '__pattern__' => [
        'id'   => '\d+',
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':id'   => ['admin/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];

