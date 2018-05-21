<?php
/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2018/5/19 0019
 * Time: 上午 8:17
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
class Login extends Controller
{
    public function login(){
        $name = login::test_input(input('username'));
        $password = login::test_input(input('password'));
        $email = login::test_input(input('email'));
        //用户登录
        if (input('op') == 'login') {
            if ($name == '' || $password == '') {
                $this->error('所填项不能为空', '/admin/login/login');
            }
            $password1= md5($password);
            $temp = Db::query("select * from bk_user where user_name = '$name' and user_pwd='$password1'");
            if (empty($temp)) {
                $this->error('用户名或密码错误', '/index/login/login');
            }
            Session::set('user_name', $name);
            Session::set('user_pwd', $password);
            $this->success('登陆成功', '/index/index/index');
        }
        //用户注册
        if (input('op') == 'register') {
            if ($name == '' || $password == '' || $email == '') {
                $this->error('所填项不能为空', '/index/login/login#signup');
            }
            $user = ['user_name' => $name, 'user_pwd' => md5($password), 'user_email' => $email];
            Db::table('bk_user')->insert($user);
            $this->success('注册成功', '/index/login/login');
        }
        //忘记密码
        if(input('op')=='repass'){
            if ($name == '' || $password == '' || $email == '') {
                $this->error('所填项不能为空', '/index/login/login#signout');
            }
            Db::table('bk_user')->where(['user_name'=>$name,'user_email'=>$email])->update(['user_pwd'=>md5($password)]);
            $this->success('修改成功，请用新密码登录','/index/login/login');
        }
        return $this->fetch();
    }
    //表单输入验证
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
