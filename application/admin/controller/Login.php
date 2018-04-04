<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Login extends Controller{
    public function login(){

        if(input('op') == 'login'){
            $name = input('username');
            $password = md5(input('password'));
            $temp = Db::query("select * from bk_user where user_name = '$name' and user_pwd='$password'");
            if(empty($temp)){
                return 'false';
            }
            return 'OK';
        }
        return $this->fetch();
    }
}