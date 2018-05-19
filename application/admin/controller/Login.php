<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public function login()
    {
        $name = login::test_input(input('username'));
        $password = login::test_input(input('password'));
        $repass = login::test_input(input('repass'));
        $email = login::test_input(input('email'));
        //用户登录
        if (input('op') == 'login') {
            if ($name == '' || $password == '') {
                $this->error('所填项不能为空', '/admin/login/login');
            }
            $password1= md5($password);
            $temp = Db::query("select * from bk_admin where user_name = '$name' and user_pwd='$password1'");
            if (empty($temp)) {
                $this->error('用户名或密码错误', '/admin/login/login');
            }
            Session::set('admin_name', $name,3600);
            Session::set('admin_pwd', $password,3600);
            $this->success('登陆成功', '/admin/index/index');
        }
        //忘记密码
        if(input('op')=='repass'){
            if ($name == '' || $password == '' || $email == '') {
                $this->error('所填项不能为空', '/admin/login/login');
            }
            $a = Db::query("select * from bk_admin where user_name='$name' and user_email ='$email'");
            if(empty($a)){
                $this->error('用户名或邮箱错误','/admin/login/login#signout');
            }
            Db::table('bk_admin')->where(['user_name'=>$name,'user_email'=>$email])->update(['user_pwd'=>md5($password)]);
            $this->success('修改成功，请用新密码登录','/admin/login/login');
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
    //用户退出
    function logout(){
        Session::delete('admin_name');
        Session::delete('admin_pwd');
        $this->success('退出成功','/admin/login/login');
    }

}