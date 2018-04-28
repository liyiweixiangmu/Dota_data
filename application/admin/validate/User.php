<?php

/**
 * Created by PhpStorm.
 * User: z
 * Date: 2018/4/27
 * Time: 11:19
 */
namespace app\admin\validate;


use think\Validate;
use app\admin\model\User as UserModel;

class User extends Validate
{
    protected $rule =   [
        'name'  => 'require|max:25',
        'email' => 'checkemail|email',
        'phone'   => 'checkphone|number|length:11',
    ];

    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'phone.number'   => '电话号码必须是数字',
        'phone.length'  => '电话号码必须为11位',
        'email'        => '邮箱格式错误',
    ];
    protected function checkName($value,$rule,$data)
    {
        return $rule == $value ? true : '名称错误';
    }
    protected function checkPhone($value)
    {
        if($result = UserModel::get(['phone' => $value])){
            return '号码已被注册';
        }
        return true;
    }
    protected function checkEmail($value)
    {
        if($result = UserModel::get(['email' => $value])){
            return '邮箱已被注册';
        }
        return true;
    }
}