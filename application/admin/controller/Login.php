<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller{
    public function login(){

        if(input('op') == 'login'){
            $name = input('username');
            $password = md5(input('password'));
            $temp = Db::query("select * from bk_user where user_name = '$name' and user_pwd='$password'");
            if(empty($temp)){
                $this->error('用户名或密码错误','/admin/login/login');
            }
            Session::set('user',$name,3600);
            Session::set('passworld',$password,3600);
            $this->success('登陆成功','/admin/index/index');
        }
        return $this->fetch();
    }
}