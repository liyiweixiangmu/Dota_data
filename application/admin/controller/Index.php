<?php

/**
 * Created by PhpStorm.
 * User: z
 * Date: 2018/4/2
 * Time: 10:59
 */
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index($id)
    {
        echo '您的id为'.$id;
    }
}